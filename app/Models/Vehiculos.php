<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;
    protected $table='vehiculos';
    protected $primaryKey='id';
    protected $fillable=
        [
            'placa','color','marca','tipo_vehiculos_id','conductores_id','propetarios_id'
        ];
}
