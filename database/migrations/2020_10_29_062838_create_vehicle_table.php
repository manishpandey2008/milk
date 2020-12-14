<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('plant_id',30);
            $table->string('vehicle_id',30)->unique();
            $table->string('owner_id',30);
            $table->string('ownership_type',30);
            $table->string('vehicle_type',30);
            $table->string('vehicle_number',30)->unique();
            $table->string('vehicle_rc_number',30)->unique();
            // $table->string('Driver_id',30);
            $table->string('vehicle_rc_doc');
            $table->string('expiry_date_rc',30);
            $table->string('insurance_number',30)->unique();
            $table->string('insurance_doc');
            $table->string('expiry_date_insurance',30);
            // $table->string('pollution_id_number',30)->unique();
            // $table->string('pollution_doc');
            // $table->string('expiry_date_pollutions_id',30);
            $table->string('fitness_id_number',30)->unique();
            $table->string('fitness_id_doc');
            $table->string('expiry_date_fitness_id',30);
            $table->string('commission_type')->nullable();
           // $table->string('commission_amount')->nullable();
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
        Schema::dropIfExists('vehicle');
    }
}
