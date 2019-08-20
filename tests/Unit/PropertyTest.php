<?php

namespace Tests\Unit;


use App\User;
use phpDocumentor\Reflection\DocBlock\Tags\Property;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class PropertyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_property_belongs_to_a_user()
    {
        $user = factory(User::class)->create();

        $property = $user->properties()->create([
            'name' => 'Test Property',
            'domain' => 'testdomain.com'
        ]);

        $this->assertEquals($user->id, $property->user->id);
    }

    /** @test */
    public function a_property_has_many_sites()
    {
        $user = factory(User::class)->create();
        $property = $user->properties()->create([
            'name' => 'Test Property',
            'domain' => 'testdomain.com'
        ]);

        $property->addSite([
            'domain' => 'site.com',
            'type' => 'php',
            'aliases' => [
                'mysite.com'
            ],
            'directory' => '/public'
        ]);


    }
}