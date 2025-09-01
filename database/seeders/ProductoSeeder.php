<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Producto de ejemplo 
        Producto::create([
            'nombre' => 'Café',
            'descripcion' => 'Café molido premium',
            'precio_compra' => 1200.00,
            'precio_venta' => 1500.00,
            'stock' => 50,
            'id_categoria' => 1,
            'id_proveedor' => 1,
        ]);

        // Crea 10 productos aleatorios usando la factory
        Producto::factory(10)->create();
    }
}
