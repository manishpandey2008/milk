<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocietydetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societydetails', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',20)->unique();
            $table->string('plant_id',20);
            $table->string('vehicle_id',20);
            $table->string('name_hin',50)->nullable();
            $table->string('father_name_eng',50);
            $table->string('father_name_hin',50)->nullable();
            $table->string('society_name',50)->nullable();
            $table->string('village_name',30);
            $table->string('pin_code',6);
            $table->string('address');
            $table->string('gender',10);
            $table->string('dob',20);
            $table->string('anniversary_date',20)->nullable();
            $table->string('emergency_contact_number',10)->nullable();
            $table->string('blood_group',5)->nullable();
            $table->string('payee_name',50);
            $table->string('bank_name',50);
            $table->string('account_number',20);
            $table->string('ifsc_code',20);
            $table->string('aadhar_number',20);
            $table->string('aadhar_card_doc');
            $table->string('opening_balance_type',10);
            $table->string('opening_amount',10);
            $table->string('society_system_type',50);
            $table->string('society_type',30);
            $table->string('commission_type',30);
            $table->string('commission_amount',10);
            $table->string('payment_type',30);
            $table->string('root_supervisor',30);
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
        Schema::dropIfExists('societydetails');
    }
}
