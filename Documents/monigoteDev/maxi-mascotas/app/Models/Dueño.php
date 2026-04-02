<?php

namespace App\Models;

// 1. IMPORTANTE: Laravel 11 usa un Trait por defecto. Asegúrate de tenerlo.
use Illuminate\Database\Eloquent\Factories\HasFactory; // Para crear datos de prueba (Cap. 9)
use Illuminate\Database\Eloquent\Model;

// 2. Definición de la Clase que representa a un Dueño en la DB
class Dueño extends Model
{
    // 3. Trait para las Factories (lo agregamos por buena práctica)
    use HasFactory;

    // 4. EL CÓDIGO CLAVE: LA PROPIEDAD $FILLABLE (MASS ASSIGNMENT WHITE-LIST)
    // Ingeniera, esta es la "LISTA BLANCA". Solo los campos definidos aquí
    // pueden ser llenados de forma masiva (ej: usando Dueño::create($request->all())).
    protected $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'telefono',
        'email',
    ];

    // 5. RELACIÓN SEMÁNTICA (Patrón MVC): Un Dueño TIENE MUCHAS Mascotas
    // (Este es el ADN del negocio de Maxi-Mascotas que Don Max ya entiende).
    public function mascotas()
    {
        return $this->hasMany(Mascota::class);
    }
}