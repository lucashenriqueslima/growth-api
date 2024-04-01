<?php

namespace App\Models\Ileva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IlevaAssociatePerson extends Model
{
    use HasFactory;

    protected $connection = 'ileva';
    protected $table = 'hbdr_asc_associado_pessoa';

    protected $guarded = [];

    public function associate()
    {
        return $this->hasOne(IlevaAssociate::class, 'id_pessoa');
    }
}
