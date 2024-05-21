<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('juguete_sucursal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('juguete_id');
            $table->unsignedBigInteger('sucursal_id');
        
        
        
            $table->foreign('juguete_id')->references('id')->on('juguetes')->onDelete('cascade');
            $table->foreign('sucursal_id')->references('id')->on('sucursales')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('juguete_sucursal');
    }
};
