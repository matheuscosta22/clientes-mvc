<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->string('telefone', 20);
            $table->string('email', 191)->unique();
            $table->string('cpfCnpj', 50)->unique();
            $table->string('endereco', 50);
            $table->string('cep', 50);
            $table->string('logradouro', 50);
            $table->string('numero', 50)->nullable();
            $table->string('complemento', 191)->nullable();
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('estado', 50);
            $table->string('observacoes', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
