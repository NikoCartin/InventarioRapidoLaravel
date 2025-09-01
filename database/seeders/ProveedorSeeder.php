<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedorSeeder extends Seeder
{
    public function run()
    {
        Proveedor::create([
            'nombre' => 'Proveedor Uno',
            'telefono' => '8888-8888',
            'correo' => 'proveedor1@email.com'
        ]);
        Proveedor::factory(9)->create();
    }
}