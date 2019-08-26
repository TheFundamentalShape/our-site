<?php

namespace App;

use App\User;
use App\Bill;

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
    public function payFullBalance()
    {
        foreach($this->bills() as $bill){
            $bill->pay();
        }
    }
}
