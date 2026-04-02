<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $fillable = ['nombre', 'especie', 'raza', 'fecha_nacimiento', 'dueño_id'];

// Relación Inversa: Una mascota PERTENECE A un dueño
public function dueño() {
    return $this->belongsTo(Dueño::class);
}
}
