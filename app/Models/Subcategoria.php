<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'categoria_id'];

    // Relación con los productos
    public function productos()
    {
        return $this->hasMany(Producto::class);  // Relación de una subcategoría con muchos productos
    }


    // Relación con la categoría
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
