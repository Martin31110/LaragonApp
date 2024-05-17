<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('juguetes', function (Blueprint $table) {
            $table->id();
            $table->string('NombreJ');
            $table->float('PrecioJ');
            $table->string('GeneroJ');
            $table->string('MaterialJ');
            $table->string('ProvedorJ');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('juguetes');
    }
};
