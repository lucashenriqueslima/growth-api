<?php

namespace App\Models\Ileva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

Class IlevaAssociate extends Model
{
    use HasFactory;

    protected $connection = 'ileva';
    protected $table = 'hbdr_asc_associado';
    protected $guarded = [];


    public function vehicle(): HasOne
    {
        return $this->hasOne(IlevaAssociateVehicle::class, 'id_associado');
    }
    
    public function person(): BelongsTo
    {
        return $this->belongsTo(IlevaAssociatePerson::class, 'id_pessoa');
    }
}
