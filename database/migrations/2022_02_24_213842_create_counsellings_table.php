<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounsellingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counsellings', function (Blueprint $table) {
            $table->id('counselling_id');
            $table->timestamps();
            $table->dateTime('seassion');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('staff_id');

            $table->foreign('staff_id')->references('staff_id')->on('staff');
            $table->foreign('client_id')->references('client_id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counsellings');
    }
}
