<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblusuario', function (Blueprint $table) {
            $table->id();
            $table->string('nomeUsuario', 255);
            $table->string('emailUsuario', 255);
            $table->string('senhaUsuario', 255);
            $table->unsignedBigInteger('tipoUsuarioId');
            $table->string('tipoUsuarioType', 255);
            $table->timestamp('emailVerificado')->nullable();
            $table->string('tokenLembrete', 100);
            $table->timestamps(); // Laravel adiciona automaticamente created_at e updated_at
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblusuario');
    }
};
