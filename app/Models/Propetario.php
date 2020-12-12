<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propetario extends Model
{
    use HasFactory;
    protected $table='propetarios';
    protected $primaryKey='id';
    protected $fillable=
        [
            'cedula_p','primer_nombre_p','segundo_nombre_p','primer_apellido_p','segundo_apellido_p','direccion_p','telefono_p','cuidad_p'
        ];
}
