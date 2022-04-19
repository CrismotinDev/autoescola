<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa')->nullable();
            $table->string('categoria')->nullable();
            $table->integer('Km')->nullable();
            $table->string('cor')->nullable();
            $table->string('marca')->nullable();
            $table->integer('ano')->nullable();
            $table->date('data_revisao')->nullable();
            $table->string('instrutor')->nullable();
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
        Schema::dropIfExists('veiculos');
    }
}
