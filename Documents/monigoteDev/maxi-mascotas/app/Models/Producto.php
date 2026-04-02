<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // LISTA BLANCA: Protección de integridad de datos
    protected $fillable = [
        'codigo_barras',
        'nombre',
        'descripcion',
        'precio_venta',
        'stock_actual',
        'categoria' // Ej: Alimento, Juguete, Medicina
    ];

    // Nota: Si los productos se registran en una consulta (ej: medicinas), 
    // luego crearemos una tabla pivote. Por ahora, el modelo base es este.
}
