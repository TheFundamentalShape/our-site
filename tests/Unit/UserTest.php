<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_be_an_admin()
    {
        $user = factory(User::class)->create();

        $user->makeAdmin();

        $this->assertEquals(1, $user->fresh()->is_admin);
    }

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

}
