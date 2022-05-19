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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email')->nullable();
            $table->date('date')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('education')->nullable();
            $table->string('gender');
            $table->string('age_range');
            $table->string('disability');
            $table->string('state_of_origin');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->string('address');
            $table->string('house_condition');
            $table->string('lga');
            $table->string('identification');
            $table->string('id_number');
            $table->date('id_issue_date');
            $table->date('id_expiry');
            $table->string('nationality')->nullable();
            $table->string('qualification');
            $table->string('google_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
