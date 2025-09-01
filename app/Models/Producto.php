<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_producto';
    protected $fillable = [
        'nombre', 'descripcion', 'precio_compra', 'precio_venta', 'stock', 'id_categoria', 'id_proveedor'
    ];
    public $timestamps = true;
}