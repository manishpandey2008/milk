<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleownerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicleowner', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',20)->unique();
            $table->string('plant_id',20);
            $table->string('name_hin',50)->nullable();
            $table->string('pin_code',6);
            $table->string('address');
            $table->string('emergency_contact_number',10)->nullable();
            $table->string('payee_name',50);
            $table->string('bank_name',50);
            $table->string('account_number',20);
            $table->string('ifsc_code',20);
            $table->string('aadhar_number',20);
            $table->string('aadhar_card_doc');
            // $table->string('opening_balance_type',10);
            // $table->string('opening_amount',10);
            $table->string('photo');
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
        Schema::dropIfExists('vehicleowner');
    }
}
