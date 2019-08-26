<?php

namespace Tests\Feature;

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
        $this->paymentGateway = new FakePaymentGateway();
    }

    /** @test */
    public function a_property_can_pay_a_balance_in_full()
    {
        // arrange
        $user = factory(User::class)->create();
        $property = $user->createProperty('My Property', 'property.com');
        $property->createBill('a test bill', 'a description for the bill', 50000);

        // act
        $property->payTotalBalance($this->paymentGateway->getToken());

        // assert
        $this->assertEquals(0, $user->properties()->first()->getTotalBalance());
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
