<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sucursales_juguetes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('juguete_id');
            $table->unsignedBigInteger('sucursal_id');
            $table->timestamps();
        
        
        
            $table->foreign('juguete_id')->references('id')->on('juguetes')->onDelete('cascade');
            $table->foreign('sucursal_id')->references('id')->on('sucursales')->onDelete('cascade');
        
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucursales_juguetes');
    }
};
