<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvals', function (Blueprint $table) {
            $table->id('approval_id');
            $table->timestamps();

            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('facility_id');

            $table->foreign('staff_id')->references('staff_id')->on('staff');
            $table->foreign('facility_id')->references('facility_id')->on('facilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approvals');
    }
}
