<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hogar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'fecha_nacimiento',
        'celular',
        'email',
        'direccion',
        'distrito',
        'provincia',
        'departamento',
        'tipo_edificacion',
        'valor_casa',
        'valor_departamento',
        'valor_contenido',
        'cobertura',
        'seguridad1',
        'seguridad2',
        'seguridad3',
        'tipo_uso_casa',
        'casa_playa',
        'metros_orilla',
        'club_playa',
        'tipo_pago',
        'metro_cuadrado',
        'anio_construccion',
        'numero_pisos',
        'numero_sotanos',
    ];
}
