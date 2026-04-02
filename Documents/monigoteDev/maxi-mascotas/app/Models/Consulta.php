<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = ['fecha', 'motivo', 'diagnostico', 'mascota_id', 'veterinario_id'];

public function mascota() {
    return $this->belongsTo(Mascota::class);
}

public function veterinario() {
    return $this->belongsTo(Veterinario::class);
}
}
