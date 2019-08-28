<?php

namespace App\Billing;

use App\Bill;

interface PaymentGateway
{
    public function pay(Bill $bill);
}