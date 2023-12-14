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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types');

            $table->unsignedBigInteger('tiendas_id');
            $table->foreign('tiendas_id')->references('id')->on('tiendas');
            
            $table->string('Codigo de barra')->nullable();
            $table->string('Nombre')->nullable();
            $table->string('Marca')->nullable();
            $table->string('Descripcion')->nullable();
            $table->integer('Stock')->default(1);
            $table->string('Precio de compra')->nullable();
            $table->string('Precio de Venta')->nullable();
            $table->boolean('active')->default(true);


            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
