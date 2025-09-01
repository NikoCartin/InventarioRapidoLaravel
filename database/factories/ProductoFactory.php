<?php

namespace Database\Factories;
use App\Models\Categoria;
use App\Models\Proveedor;
use App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    protected $model = Producto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'precio_compra' => $this->faker->randomFloat(2, 100, 1000),
            'precio_venta' => $this->faker->randomFloat(2, 150, 1500),
            'stock' => $this->faker->numberBetween(1, 100),
            'id_categoria' => Categoria::factory(),
            'id_proveedor' => Proveedor::factory(),
        ];
    }
}
