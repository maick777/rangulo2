<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salud extends Model
{
    use HasFactory;

    protected $fillable = [
        'titular_nombres',
        'titular_fecha_nacimiento',
        'celular',
        'email',
        'conyugue_nombres',
        'conyugue_fecha_nacimiento',
        'hijo_nombres',
        'hijo_fecha_nacimiento',
        'hijo_nombres2',
        'hijo_fecha_nacimiento2',
        'hijo_nombres3',
        'hijo_fecha_nacimiento3',
        'migracion',
        'plan1',
        'plan2',
        'plan3',
        'plan4',
        'tipo_pago'
    ];
}
