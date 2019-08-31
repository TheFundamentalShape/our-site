<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['property_id', 'title', 'description', 'price', 'paid_at'];

    /*
     * --------------------------
     * ELOQUENT RELATIONSHIPS
     * --------------------------
     */
    public function property(){
        return $this->belongsTo(Property::class);
    }

    /*
     * --------------------------
     * QUERY SCOPES
     * --------------------------
     */

    public function scopeUnpaid($query)
    {
        return $query->whereNull('paid_at');
    }

    public function scopePaid($query)
    {
        return $query->whereNotNull('paid_at');
    }

    /*
     * --------------------------
     * CUSTOM MODEL METHODS
     * --------------------------
     */

    public function getBillPriceFormatted()
    {
        return number_format(($this->price / 100), 2, '.', ' ');
    }
}
