<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelance', function (Blueprint $table) {
            $table->id();
            $table->string('em_name');
            $table->string('ep_name');
            $table->date('from');
            $table->date('to');
            $table->decimal('wage',7,3);
            $table->integer('pb_periode');
            $table->string('place');
            $table->integer('em_id');
            $table->longText('job_duty');
            $table->date('sig_date_em');
            $table->date('sig_date_ep');
            $table->boolean('fixed_period')->nullable()->default(false);
            $table->integer('fixed_period_of')->nullable()->default('0');
            $table->boolean('break_partie')->nullable()->default(false);
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
        Schema::dropIfExists('freelance');
    }
}
