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
        Schema::create('maquinas_ativas', function (Blueprint $table) {
            $table->id();
            $table->string('colaborador');
            $table->string('departamento');
            $table->string('hostname');
            $table->string('ip');
            $table->string('mac_address');
            $table->text('observacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maquinas_ativas');
    }
};
