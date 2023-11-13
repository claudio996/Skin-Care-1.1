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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('sexo');
            $table->integer('cantidad_min_sesion');
            $table->integer('cantidad_max_sesion');
            $table->integer('precio_min_sesion');
            $table->integer('precio_max_sesion');
            $table->string('zonas');
            $table->unsignedBiginteger('tipo_id')->nullable();
            $table->foreign('tipo_id')->references('id')->on('tipo_servicios')->nullable()->constrained()->onUpdate('cascade');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
