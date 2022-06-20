<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    use HasFactory;

    protected $fillable = [
        'razon_social',
        'direccion',
        'telefono',
        'ruc',
        'nombre_contacto',
        'cargo_contacto',
        'celular_contacto',
        'email_contacto',
        'nombre_representante_legal',
        'cargo_representante_legal',
        'broker',
        'planilla_anual',
        'nro_aporte_anio_con_grati',
        'nro_aporte_anio_sin_grati',
        'numero_total_trabajadores',
        'titutar_solo',
        'titular1_dependiente',
        'titular2_dependiente',
        'titular3_dependiente',
        'numero_total_asegurados_eps_actual',
        'eps',
        'eps_actual',
        'compania_seguro',
        'adjunto_plan_salud',
        'adjunto_siniestralidad',
    ];
}
