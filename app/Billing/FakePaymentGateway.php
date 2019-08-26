<?php

namespace App\Billing;

class FakePaymentGateway implements PaymentGateway
{
    public function getToken()
    {
        return 'valid-token';
    }
}