<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;
    protected $table='conductores';
    protected $primaryKey='id';
    protected $fillable=
        [
            'cedula_c','primer_nombre_c','segundo_nombre_c','primer_apellido_c','segundo_apellido_c','direccion_c','telefono_c','cuidad_c'
        ];
}
