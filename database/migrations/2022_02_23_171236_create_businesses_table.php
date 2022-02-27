<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->bigIncrements('business_id');
            $table->timestamps();
            $table->string('email');
            $table->string('business_name');
            $table->string('business_status');
            $table->enum('business_type', ['startup', 'existing']);
            $table->integer('mobile');
            $table->string('cert');
            $table->string('state');
            $table->string('guarantor');
            $table->string('support_required');
            $table->string('business_class');
            $table->boolean('disability');
            $table->integer('revenue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
