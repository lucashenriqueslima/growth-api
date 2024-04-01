<?php

namespace App\Models\Ileva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IlevaAssociateVehicleModel extends Model
{
    use HasFactory;

    protected $connection = 'ileva';
    protected $table = 'hbdr_asc_veiculo_modelo';
    protected $guarded = [];
    
    public function vehicle()
    {
        return $this->belongsTo(IlevaAssociateVehicle::class, 'id_modelo');
    }
}
