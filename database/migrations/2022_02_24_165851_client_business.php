<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientBusiness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_business', function (Blueprint $table) {

            $table->unsignedBigInteger('client');
            $table->unsignedBigInteger('business');
            $table->foreign('client')->references('client_id')->on('clients')->onDelete('cascade');
            $table->foreign('business')->references('business_id')->on('businesses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
