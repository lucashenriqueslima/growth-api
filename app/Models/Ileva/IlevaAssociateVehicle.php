<?php

namespace App\Models\Ileva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IlevaAssociateVehicle extends Model
{
    use HasFactory;

    protected $connection = 'ileva';
    protected $table = 'hbdr_asc_associado_veiculo';

    protected $guarded = [];

    public function associate()
    {
        return $this->belongsTo(IlevaAssociate::class, 'id_associado');
    }

    public function color()
    {
        return $this->hasOne(IlevaAssociateVehicleColor::class, 'id_cor');
    }


}
