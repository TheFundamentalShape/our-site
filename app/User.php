<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Property;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable, Billable;

    protected $fillable = ['name', 'email', 'phone', 'password'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];

    /*
     * --------------------------
     * ELOQUENT RELATIONSHIPS
     * --------------------------
     */
    public function properties(){
        return $this->hasMany(Property::class);
    }

    /*
     * --------------------------
     * CUSTOM MODEL METHODS
     * --------------------------
     */
    public function createProperty($name, $domain)
    {
        $property = $this->properties()->create([
            'name' => $name,
            'domain' => $domain
        ]);

        return $property;
    }
    public function makeAdmin()
    {
        $this->is_admin = 1;
        $this->save();
    }
}
