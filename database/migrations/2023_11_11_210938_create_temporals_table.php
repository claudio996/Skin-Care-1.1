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
        Schema::create('temporals', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('sexo');
            $table->string('zonas');
            $table->integer('cantidad_min_sesion')->default(0);
            $table->integer('cantidad_max_sesion')->default(0);
            $table->integer('precio_min_sesion')->default(0);
            $table->integer('precio_max_sesion')->default(0);
            $table->string('url_imagen');
            $table->integer('descuento');
            $table->string('descripcion');
            $table->integer('tipo_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temporals');
    }
};
