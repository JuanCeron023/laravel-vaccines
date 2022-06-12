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
        Schema::create('vacunacions', function (Blueprint $table) {
                    $table->increments('id'); 
                    $table->string('vacuna', 100);
                    $table->string('dosis', 100);
                    $table->string('fecha', 100);
                    $table->integer('persona')->unsigned();
                    $table->foreign('persona')->references('id')->on('usuarios'); 
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacunacions');
    }
};
