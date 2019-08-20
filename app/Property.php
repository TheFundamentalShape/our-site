<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name', 'domain', 'user_id'
    ];

    protected $table = 'properties';
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
