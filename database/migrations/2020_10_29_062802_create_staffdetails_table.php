<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffdetails', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',20)->unique();
            $table->string('plant_id',20);
            $table->string('designation',50);
            $table->string('department',50);
            $table->string('name_in_hindi',50)->nullable();
            $table->string('father_name_eng',50);
            $table->string('father_name_hin',50)->nullable();
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
            $table->string('working_days_in_week',70);
            $table->string('driver_licence_number',30)->nullable();
            $table->string('driver_licence_doc')->nullable();
            $table->string('driver_licence_issue_date',30)->nullable();
            $table->string('driver_licence_expiry_date',30)->nullable();
            $table->string('pan_card_number',30)->nullable();
            $table->string('pan_card_doc')->nullable();
            $table->string('medical_certificate');
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
        Schema::dropIfExists('staffdetails');
    }
}
