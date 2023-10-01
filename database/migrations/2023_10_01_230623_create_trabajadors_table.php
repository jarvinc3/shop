<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('trabajadors', function (Blueprint $table) {
            $table->id('idtrabajador');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('trabajadors');
    }
};
