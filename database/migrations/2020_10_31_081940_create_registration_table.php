<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',20)->unique();
            $table->string('plant_id',20);
            $table->string('bmc_id',20)->nullable();
            $table->string('society_id',20)->nullable();
            $table->string('creater_user_id',20);
            $table->string('working_role',30);
            $table->string('first_name',30);
            $table->string('mid_name',30)->nullable();
            $table->string('last_name',30)->nullable();
            $table->string('phone_number',20)->unique();
            $table->string('user_otp',10)->nullable();
            $table->string('otp_conformation_status')->nullable();
            $table->string('email',50)->nullable();
            $table->string('user_photo')->nullable();
            $table->string('password',20);
            $table->string('details_status')->nullable();
            $table->string('remember_token',200);
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
        Schema::dropIfExists('registration');
    }
}
