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
        Schema::create('clents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('staff_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email');
            $table->date('date');
            $table->integer('telephone');
            $table->string('education');
            $table->string('gender');
            $table->string('age_range');
            $table->string('disability');
            $table->string('state_of_origin');
            $table->unsignedBigInteger('client_id');
            $table->string('address');
            $table->string('house_condition');
            $table->string('lga');
            $table->string('identification');
            $table->string('id_number');
            $table->date('id_issue_date');
            $table->date('id_expiry');
            $table->string('nationality');
            $table->string('qualification');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clents');
    }
};
