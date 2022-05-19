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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('social_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', array('client', 'staff', 'admin', 'manager'));
            $table->string('password')->nullable();
            $table->string('credit_score')->nullable();
            $table->string('department')->nullable();
            $table->boolean('verified')->default(0);
            $table->boolean('approval')->default(0);
            $table->string('verifiedBy')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->date('date')->nullable();
            $table->string('phone')->nullable();
            $table->string('education')->nullable();
            $table->string('gender')->nullable();
            $table->string('age_range')->nullable();
            $table->string('disability')->nullable();
            $table->string('state_of_origin')->nullable();
            $table->string('address')->nullable();
            $table->string('house_condition')->nullable();
            $table->string('lga')->nullable();
            $table->string('identification')->nullable();
            $table->string('id_number')->nullable();
            $table->date('id_issue_date')->nullable();
            $table->date('id_expiry')->nullable();
            $table->string('nationality')->nullable();
            $table->string('qualification')->nullable();
            $table->string('completed')->nullable();
            $table->timestamps();
            $table->string('google_id')->nullable();
            $table->string('avatar')->nullable();
            $table->string('guarantorFilled')->nullable();
            $table->string('businessFilled')->nullable();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('approvals', function (Blueprint $table) {
            $table->increments('apid');
            $table->string('client_name')->nullable();
            $table->string('business_name')->nullable();
            $table->string('approving_manager_name')->nullable();
            $table->string('amount')->nullable();
            $table->text('comment')->nullable();
            $table->string('status')->default('unattended');
            $table->timestamps();
            $table->integer('uid');
            $table->integer('sid');
        });


        Schema::create('departments', function (Blueprint $table) {
            $table->increments('did');
            $table->string('department_name');
            $table->timestamps();
            $table->integer('uid');
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->increments('pid');
            $table->string('amount');
            $table->longText('proof');
            $table->timestamps();
            $table->integer('apid')->nullable();
            $table->integer('uid');
        });





        Schema::create('guarantors', function (Blueprint $table) {
            $table->increments('gid');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('education');
            $table->string('occupation');
            $table->string('emp_status');
            $table->string('job_title');
            $table->string('state_of_origin');
            $table->integer('grade_level');
            $table->integer('length_of_service');
            $table->string('bvn');
            $table->string('lga');
            $table->string('marital_status');
            $table->date('date_of_appointment');
            $table->date('dob');
            $table->integer('uid');
            $table->timestamps();
        });

        Schema::create('business', function (Blueprint $table) {
            $table->increments('bid');
            $table->string('business_name');
            $table->string('business_status');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('number_of_emp');
            $table->string('location');
            $table->string('business_type');
            $table->date('business_start');
            $table->string('primary_source');
            $table->string('annual_turnover');
            $table->string('gross_profit_margin');
            $table->string('net_profit_margin');
            $table->string('collateral_cover');
            $table->string('bank_account_duration');
            $table->string('account_type');
            $table->string('status_of_borrowing');
            $table->string('id_type');
            $table->string('supplier_invoice');
            $table->string('age_bracket');
            $table->string('business_function');
            $table->string('type_incorporation');
            $table->string('qualification_level');
            $table->string('business_address');
            $table->string('employment_status');
            $table->string('home_address');
            $table->string('member_of_association')->nullable();
            $table->string('intro_letter');
            $table->string('house_status');
            $table->string('referees');
            $table->string('any_capital');
            $table->string('equity_ratio');
            $table->string('gross_revenue');
            $table->string('certifications');
            $table->string('business_class');
            $table->string('shareholder_1');
            $table->string('shareholder_2');
            $table->string('shareholder_3');
            $table->string('shareholder_4');
            $table->string('experience');
            $table->string('main_supplier');
            $table->string('main_clients');
            $table->longText('risk_plan');
            $table->integer('uid');
            $table->timestamps();
        });




        //        Schema::create('team_user', function (Blueprint $table) {
        //            $table->id();
        //            $table->foreignId('team_id');
        //            $table->foreignId('uid');
        //            $table->string('role')->nullable();
        //            $table->timestamps();
        //
        //            $table->unique(['team_id', 'uid']);
        //        });
        //
        //        Schema::create('team_invitations', function (Blueprint $table) {
        //            $table->id();
        //            $table->foreignId('team_id')->constrained()->cascadeOnDelete();
        //            $table->string('email');
        //            $table->string('role')->nullable();
        //            $table->timestamps();
        //
        //            $table->unique(['team_id', 'email']);
        //        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('uid')->index();
            $table->string('name');
            $table->boolean('personal_team');
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('approvals');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('payments');
        //        Schema::dropIfExists('team_user');
        //        Schema::dropIfExists('team_invitations');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('guarantors');
        Schema::dropIfExists('business');
        Schema::dropIfExists('sessions');
        //        Schema::dropIfExists('teams');
        Schema::dropIfExists('password_resets');
    }
};
