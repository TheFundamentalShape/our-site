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
    public function a_user_can_register_many_unique_properties(){
        // Arrange
        $user = factory(User::class)->create();

        $response = $this
            ->actingAs($user)
            ->json('POST', '/properties/create',
                [
                    'name' => 'my property',
                    'domain' => 'property.com'
                ]);

        $response2 = $this
            ->actingAs($user)
            ->json('POST', '/properties/create',
                [
                    'name' => 'my property',
                    'domain' => 'property2.com'
                ]);

        // Assert
        $this->assertEquals(2, $user->properties()->count());
    }
}
