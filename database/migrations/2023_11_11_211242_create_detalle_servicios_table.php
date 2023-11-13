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
        Schema::create('detalle_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('url_imagen');
            $table->integer('descuento');
            $table->integer('total');
            $table->string('descripcion');
            $table->unsignedBiginteger('servicios_id')->nullable();
            $table->foreign('servicios_id')->references('id')->on('servicios')->nullable()->constrained()->onUpdate('cascade');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_servicios');
    }
};
