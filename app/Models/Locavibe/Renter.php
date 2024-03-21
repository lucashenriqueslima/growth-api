<?php

namespace App\Models\Locavibe;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use MongoDB\Laravel\Auth\User as Authenticatable;


class Renter extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $connection = 'locavibe';
    protected $collection = 'renters';
    protected $guarded = [];
    
}
