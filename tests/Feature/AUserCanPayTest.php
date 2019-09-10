<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class AUserCanPayTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_pay_their_whole_balance_off()
    {
        $user = factory(User::class)->create();
        $property = $user->createProperty('Test property', 'test.com');
        $bill = $property->createBill('Bill #1', 'this is a test bill.', 100000);
        $bill2 = $property->createBill('Bill #2', 'this is another test bill.', 50000);
        $this->assertEquals(150000, $property->getTotalBalance());
        $this->assertEquals(2, $property->bills()->count());

        $this
            ->actingAs($user)
            ->post("/properties/" . $property->id . "/pay/full", [
                'payment-token' => 'valid-token'
            ])
            ->assertStatus(200);

        $this->assertEquals(0, $property->fresh()->getTotalBalance());
        $this->assertEquals(0, $property->fresh()->bills()->unpaid()->count());
    }

    /** @test */
    public function a_user_can_pay_a_single_bill()
    {
        $user = factory(User::class)->create();
        $property = $user->createProperty('Test property', 'test.com');
        $bill = $property->createBill('Bill #1', 'this is a test bill.', 100000);
        $bill2 = $property->createBill('Bill #2', 'this is another test bill.', 50000);
        $this->assertEquals(150000, $property->getTotalBalance());
        $this->assertEquals(2, $property->bills()->count());

        $this
            ->actingAs($user)
            ->post("/properties/" . $property->id . "/pay/bill/" . $bill->id, [
                'payment-token' => 'valid-token'
            ])
            ->assertStatus(200);

        $this->assertEquals(50000, $property->fresh()->getTotalBalance());
        $this->assertEquals(1, $property->fresh()->bills()->unpaid()->count());
    }
}
