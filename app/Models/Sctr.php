<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sctr extends Model
{
    use HasFactory;

    protected $fillable = [
        'razon_social',
        'ruc',
        'nombre_contacto',
        'celular_contacto',
        'email_contacto',
        'actividad',
        'total_trabajadores',
        'planilla_total',
        'adjunto_trama',
    ];

}
