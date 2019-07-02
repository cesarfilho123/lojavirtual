<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',190);
            $table->string('descricao');
            $table->text('imagens');
            $table->text('cores');
            $table->text('tamanhos');
            $table->decimal('valor', 10, 2);	
            $table->enum('status', ['ativo', 'inativo','excluido']);
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
        Schema::dropIfExists('produtos');
    }
}
