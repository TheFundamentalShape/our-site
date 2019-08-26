<?php

namespace Tests\Unit;


use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class PropertyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_property_belongs_to_a_user()
    {
        $user = factory(User::class)->create();

        $property = $user->createProperty('Test Property', 'testdomain.com');

        $this->assertEquals($user->id, $property->user->id);
    }

    /** @test */
    public function a_property_can_be_billed_for_a_services()
    {
        $user = factory(User::class)->create();
        $property = $user->createProperty('Company name', 'domain.com');

        $property->createBill('Bill title', 'Description', 50000);

        // assert
        $this->assertEquals('Bill title', $user->properties()->first()->bills()->first()->title);
        $this->assertEquals('Description', $user->properties()->first()->bills()->first()->description);
        $this->assertEquals(50000, $user->properties()->first()->bills()->first()->price);
    }
}