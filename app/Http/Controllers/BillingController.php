<?php

namespace App\Http\Controllers;

use App\Billing\FakePaymentGateway;
use App\Property;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function payFullBalance(Property $property)
    {
        $paymentGateway = new FakePaymentGateway(request('payment-token'));
        $property->payTotalBalance($paymentGateway);
    }
    public function paySingleBill(Property $property, $bill)
    {
        $bill = $property->bills()->where('id', $bill)->firstOrFail();

        $paymentGateway = new FakePaymentGateway(request('payment-token'));
        $property->paySingleBill($bill, $paymentGateway);
    }
}
