<?php

namespace Tests\Feature;

use App\Bill;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

use App\Billing\FakePaymentGateway;

class RegisterPropertyTest extends TestCase
{
    use RefreshDatabase;

    private $paymentGateway;

    public function setUp(): void
    {
        parent::setUp();
        $this->paymentGateway = new FakePaymentGateway('valid-token');
    }

    /** @test */
    public function a_property_can_pay_a_balance_in_full()
    {
        // arrange
        $user = factory(User::class)->create();
        $property = $user->createProperty('My Property', 'property.com');
        $property->createBill('a test bill', 'a description for the bill', 50000);

        // act
        $property->payTotalBalance($this->paymentGateway, $this->paymentGateway->getPaymentToken());

        // assert

        // balance is 0
        $this->assertEquals(0, $user->properties()->first()->getTotalBalance());

        // no bills exist
        $this->assertEquals(0, $user->properties()->first()->bills()->unpaid()->count());
    }

    /** @test */
    public function a_property_can_pay_a_single_bill()
    {
        // arrange
        $user = factory(User::class)->create();
        $property = $user->createProperty('My Property', 'property.com');
        $bill = $property->createBill('a test bill', 'a description for the bill', 50000);
        $bill2 = $property->createBill('another test bill', 'a description for this second bill', 50000);
        $this->assertEquals(100000, $property->fresh()->getTotalBalance());

        // act
        $property->paySingleBill($bill, $this->paymentGateway, $this->paymentGateway->getPaymentToken());

        // assert

        // balance is 50000 (not 100000)
        $this->assertEquals(50000, $user->properties()->first()->fresh()->getTotalBalance());

        // 1 bill should still exist
        $this->assertEquals(1, $user->properties()->first()->fresh()->bills()->unpaid()->count());
    }

    /** @test */
    public function a_property_can_have_a_balance()
    {
        $user = factory(User::class)->create();
        $property = $user->createProperty('Company name', 'domain.com');

        $property->createBill('Bill description', 'lorem...', 50000);
        $property->createBill('Bill 2 description', 'more lorem...', 10000);

        // assert
        $this->assertEquals(50000 + 10000, $property->getTotalBalance());
    }
}
