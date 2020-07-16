<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vehicle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // $table->string('id_cont_mod')->unsigned();
            //$table->string('id_user');
            $table->string('reponse1');
            $table->string('reponse2');
            $table->string('reponse3');
            $table->string('reponse4');
            $table->string('reponse5');
            $table->string('reponse6');
            $table->string('reponse7');
            $table->string('reponse8');
            $table->string('reponse9');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Vehicle');
    }
}
