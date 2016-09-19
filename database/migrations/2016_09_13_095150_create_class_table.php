<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Classes', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->float('rate');
            $table->integer('insurance_contract');
            $table->float('insurance_rate');
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
        Schema::drop('Classes');
    }
}
