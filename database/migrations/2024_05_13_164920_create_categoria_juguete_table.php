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
        Schema::create('categoria_juguete', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('juguete_id');
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();



            $table->foreign('juguete_id')->references('id')->on('juguetes')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_juguete');
    }
};
