<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class RegisterPropertyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_property_can_be_billed_for_many_services()
    {
        $user = factory(User::class)->create();
        $property = $user->createProperty('Company name', 'domain.com');

        $bill1 = $property->bill('Bill description', 'lorem...', 50000);
        $bill2 = $property->bill('Bill 2 description', 'more lorem...', 10000);

        // assert
        $this->assertEquals(2, $user->properties()->first()->bills()->count());
    }

    /** @test */
    public function a_property_can_have_a_balance()
    {
        $user = factory(User::class)->create();
        $property = $user->createProperty('Company name', 'domain.com');

        $bill1 = $property->bill('Bill description', 'lorem...', 50000);
        $bill2 = $property->bill('Bill 2 description', 'more lorem...', 10000);

        // assert
        $this->assertEquals(50000 + 10000, $property->getTotalBalance());
    }

    /** @test */
    public function a_property_can_subscribe_to_hosting()
    {
        $user = factory(User::class)->create();
        $property = $user->createProperty('Company name', 'domain.com');


    }
}
