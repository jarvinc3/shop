<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_productos')->nullable();
            $table->unsignedBigInteger('id_clientes')->nullable();
            $table->unsignedBigInteger('id_trabajador')->nullable();
            $table->foreign('id_productos')->references('idproducto')->on('productos');
            $table->foreign('id_clientes')->references('idcliente')->on('clientes');
            $table->foreign('id_trabajador')->references('idtrabajador')->on('trabajadors');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
