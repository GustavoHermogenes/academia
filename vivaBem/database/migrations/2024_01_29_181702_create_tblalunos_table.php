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
        Schema::create('tblalunos', function (Blueprint $table) {
            $table->id();
            $table->string('nomeAluno', 255);
            $table->date('dataAluno');
            $table->string('foneAluno', 20);
            $table->string('enderecoAluno', 255);
            $table->string('cidadeAluno', 100);
            $table->string('estadoAluno', 50);
            $table->string('cepAluno', 10);
            $table->timestamp('dataInscricaoAluno');
            $table->decimal('alturaAluno', 3, 2);
            $table->decimal('pesoAluno', 5, 2);
            $table->string('objetivoAluno', 255);
            $table->string('planoAluno', 100);
            $table->enum('statusAluno', ['ativo', 'inativo']);
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
        Schema::dropIfExists('tblalunos');
    }
};
