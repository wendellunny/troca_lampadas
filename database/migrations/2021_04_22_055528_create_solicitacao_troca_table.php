<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitacaoTrocaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacao_troca', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cidadao',70);
            $table->string('rua',255);
            $table->string('numero',4);
            $table->string('bairro',30);
            $table->string('complemento',4)->nullable();
            $table->string('status',15);
            $table->string('codigo',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitacao_troca');
    }
}
