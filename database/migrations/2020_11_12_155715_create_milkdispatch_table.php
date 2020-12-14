<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilkdispatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milkdispatch', function (Blueprint $table) {
            $table->id();
            $table->string('dispatch_id',20)->unique();
            $table->string('from_role',20);
            $table->string('from_id',20);
            $table->string('vehicle_id',20);
            $table->string('vehicle_no',30);
            $table->string('milk_weight',10);
            $table->string('milk_clr',10);
            $table->string('milk_snf',10);
            $table->string('milk_rate',10);
            $table->string('vehicle_status',10)->nullable();
            $table->string('collector_role',10);
            $table->string('collector_id',20);
            $table->string('collector_status',10)->nullable();
            $table->string('new_milk_weight',10)->nullable();
            $table->string('new_milk_clr',10)->nullable();
            $table->string('new_milk_snf',10)->nullable();
            $table->string('new_milk_rate',10)->nullable();
            $table->string('collector_msg')->nullable();
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
        Schema::dropIfExists('milkdispatch');
    }
}
