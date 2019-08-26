<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class BillTest extends TestCase
{
    /** @test  */
    public function a_bill_can_be_payed(){
        $user = factory(User::class)->create();
        $property = $user->createProperty('My property', 'property.com');
        $bill = $property->createBill('my bill', 'a good bill', 50000);

        $bill->pay();
    }
}
