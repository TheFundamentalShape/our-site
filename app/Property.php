<?php

namespace App;

use App\User;
use App\Bill;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name', 'domain', 'user_id'
    ];

    protected $table = 'properties';
    private $totalBalance;

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
    public function bill($title, $description, $price, $status='in-progress')
    {
        $this->totalBalance += $price;

        return $this->bills()->create([
            'title' => $title,
            'description' => $description,
            'price' => $price,
            'state' => $status
        ]);
    }

    public function getTotalBalance()
    {
        return $this->totalBalance;
    }
}
