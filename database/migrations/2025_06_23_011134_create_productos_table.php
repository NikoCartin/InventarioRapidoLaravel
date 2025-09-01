<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('productos', function (Blueprint $table) {
        $table->id('id_producto');
        $table->string('nombre');
        $table->text('descripcion')->nullable();
        $table->decimal('precio_compra', 10, 2);
        $table->decimal('precio_venta', 10, 2);
        $table->integer('stock');
        $table->unsignedBigInteger('id_categoria');
        $table->unsignedBigInteger('id_proveedor');
        $table->timestamps();

        $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
        $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
