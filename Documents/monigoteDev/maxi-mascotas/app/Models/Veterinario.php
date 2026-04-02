<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    use HasFactory;

    // LISTA BLANCA: Campos que permitimos llenar
    protected $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'especialidad',
        'telefono',
        'email'
    ];

    // RELACIÓN: Un veterinario atiende MUCHAS consultas
    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }
}
