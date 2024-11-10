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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcategoria_id'); // Define el tipo de dato explícitamente
            $table->foreign('subcategoria_id')
                ->references('id')
                ->on('subcategorias')
                ->onDelete('cascade'); // Definimos la relación
            $table->string('nombre');
            $table->string('marca');
            $table->decimal('precio', 8, 2);
            $table->integer('cantidad');
            $table->string('color');
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
