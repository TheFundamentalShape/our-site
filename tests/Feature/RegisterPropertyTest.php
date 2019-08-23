<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Property;

class RegisterPropertyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_register_a_property()
    {
        $user = factory(User::class)->create();

        $user->createProperty('Company name', 'domain.com');

        // assert
        $this->assertEquals(1, $user->properties->count());
        $this->assertEquals('Company name', $user->properties->first()->name);
        $this->assertEquals('domain.com', $user->properties->first()->domain);
    }

    /** @test */
    public function a_user_can_have_many_unique_properties(){
        // Arrange
        $user = factory(User::class)->create();

        // Act
        $property1 = $user->createProperty('my property', 'property.com');
        $property2 = $user->createProperty('my property 2', 'property2.com');

        // Assert
        $this->assertEquals(2, $user->properties()->count());
        $this->assertNotEquals($property1->domain, $property2->domain);
    }

    
}
