<?php

namespace App\Models\Ileva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IlevaAssociateVehicleColor extends Model
{
    use HasFactory;

    protected $connection = 'ileva';
    protected $table = 'hbdr_asc_veiculo_cor';
    protected $guarded = [];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(IlevaAssociateVehicle::class, 'id_cor');
    }

}
