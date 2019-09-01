<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class AUserCanPayTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_pay_their_whole_balance_off() {
        $user = factory(User::class)->create();
        $property = $user->createProperty('Test property', 'test.com');
        $bill = $property->createBill('Bill #1', 'this is a test bill.', 100000);
        $bill2 = $property->createBill('Bill #2', 'this is another test bill.', 50000);
        $this->assertEquals(150000, $property->getTotalBalance());
        $this->assertEquals(2, $property->bills()->count());


    }
}
