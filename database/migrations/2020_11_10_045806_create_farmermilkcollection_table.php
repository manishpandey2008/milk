<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmermilkcollectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmermilkcollection', function (Blueprint $table) {
            $table->id();
            $table->string('collectionId',10)->unique();
            $table->string('society_id',10);
            $table->string('user_id',10);
            $table->string('milk_snf',10);
            $table->string('milk_clr',10);
            $table->string('milk_rate',10);
            $table->string('milk_weight',10);
            $table->string('milk_price',10);
            $table->string('farmer_status',10);
            $table->string('cattle')->nullable();
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
        Schema::dropIfExists('farmermilkcollection');
    }
}
