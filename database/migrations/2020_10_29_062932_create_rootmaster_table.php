<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRootmasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rootmaster', function (Blueprint $table) {
            $table->id();
            $table->string('root_master_type',30);
            $table->string('root_id',30)->unique();
            $table->string('plant_id',30);
            $table->string('root_name',50);
            $table->string('root_expenses',10);
            $table->string('vehicle_id',30);
            $table->string('root_length',30);
            $table->string('shift_time',30);

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
        Schema::dropIfExists('rootmaster');
    }
}
