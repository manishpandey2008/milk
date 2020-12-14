<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatechartdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratechartdata', function (Blueprint $table) {
            $table->id();
            $table->string('plant_id',30);
            $table->string('chatCategory',30);
            $table->string('cartFormula',30);
            $table->string('minOfX',30);
            $table->string('maxOfX',30);
            $table->string('diffOfX',30);
            $table->string('minOfY',30);
            $table->string('maxOfY',30);
            $table->string('diffOfY',30);
        
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
        Schema::dropIfExists('ratechartdata');
    }
}
