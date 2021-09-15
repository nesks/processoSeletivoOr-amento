<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano', function (Blueprint $table) {
            $table->id();
            $table->integer('quant');
            $table->string('nome', 100);
            $table->decimal('valor',9,3);
            $table->unsignedBigInteger('orcamento_id');
            $table->timestamps();

            $table->foreign('orcamento_id')
            ->references('id')
            ->on('orcamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plano');
    }
}
