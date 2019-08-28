<?php

namespace App\Billing;

use App\Bill;
use App\Billing\PaymentFailedException;
use App\Billing\InvalidPaymentTokenException;
use Carbon\Carbon;

class FakePaymentGateway implements PaymentGateway
{
    private $charges;
    private $paymentToken;

    public function __construct($paymentToken)
    {
        $this->charges = collect();

        if($paymentToken !== 'valid-token')
            throw new InvalidPaymentTokenException;

        $this->paymentToken = $paymentToken;
    }

    public function pay(Bill $bill)
    {
        if($this->paymentToken != 'valid-token'){
            throw new PaymentFailedException();
        }

        // charge
        $this->charges[] = $bill->price;

        // update the bill price
        $bill->price = 0;
        $bill->paid_at = Carbon::now();

        $bill->save();
    }
    public function getPaymentToken()
    {
        return $this->paymentToken;
    }
    public function totalCharges()
    {
        return $this->charges->sum();
    }
}