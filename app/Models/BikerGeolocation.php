<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BikerGeolocation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function biker()
    {
        return $this->belongsTo(Biker::class);
    }
}
