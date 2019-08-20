<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function show(Property $property){
        return view('billing', [
            'property' => $property
        ]);
    }
}
