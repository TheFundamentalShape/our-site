<?php

namespace App;

use App\Bill;
use App\Billing\PaymentGateway;
use App\User;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['name', 'domain', 'user_id'];
    protected $table = 'properties';

    /*
     * --------------------------
     * ELOQUENT RELATIONSHIPS
     * --------------------------
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function bills(){
        return $this->hasMany(Bill::class);
    }

    /*
     * --------------------------
     * CUSTOM MODEL METHODS
     * --------------------------
     */
    public function createBill($title, $description, $price)
    {
        return $this->bills()->create([
            'title' => $title,
            'description' => $description,
            'price' => $price
        ]);
    }
    public function getTotalBalance()
    {
        return $this->bills->sum('price');
    }

    public function paySingleBill(Bill $bill, PaymentGateway $paymentGateway)
    {
        $paymentGateway->pay($bill);
    }
    public function payTotalBalance(PaymentGateway $paymentGateway)
    {
        // create a consolidation bill where all bills are condensed to
        $totalBill = $this->createBill('Consolidated bill', 'This is a consolidation of all your individual bills, into a single bill.', $this->getTotalBalance());
        $this->paySingleBill($totalBill, $paymentGateway);

        // mark all of the bills as 'paid_at' for Carbon::now()
        $this->bills()->unpaid()->update(['paid_at' => Carbon::now(), 'price' => 0]);
    }
}
