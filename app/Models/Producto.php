<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Relación con la subcategoría
    public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::class);
    }

    // Relación con la marca
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    // Relación muchos a muchos con colores
    public function colores()
    {
        return $this->belongsToMany(Color::class, 'color_producto');
    }
}

