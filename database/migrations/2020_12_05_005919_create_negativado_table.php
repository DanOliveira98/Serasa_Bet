<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegativadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negativados', function (Blueprint $table) {
            $table->id();
            $table->string('cpf')->unique()->nullable();
            $table->float('valor_divida')->nullable();
            $table->string('nome')->nullable();
            $table->string('nome_mae');
            $table->string('rg');
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('negativado');
    }
}
