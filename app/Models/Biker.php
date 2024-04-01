<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Biker extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $guarded = [];

    
    public function geolocation()
    {
        return $this->hasOne(BikerGeolocation::class);
    }

    public function motorcycle(): HasOne
    {
        return $this->hasOne(Motorcycle::class);
    }


}
