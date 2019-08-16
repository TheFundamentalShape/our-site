<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_user_can_have_many_unique_properties(){
        // Arrange
        $user = factory(User::class)->create();

        // Act
        $user->properties()->create([
            'name' => 'my property',
            'domain' => 'property.com'
        ]);

        $user->properties()->create([
            'name' => 'my property',
            'domain' => 'property2.com'
        ]);

        // Assert
        $this->assertEquals(2, $user->properties()->count());
    }
}
