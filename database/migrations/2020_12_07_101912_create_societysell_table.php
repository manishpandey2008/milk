<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocietysellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societysell', function (Blueprint $table) {
            $table->id();
            $table->string('cart_id',20)->unique();
            $table->string('order_id',20)->nullable();
            $table->string('order_status',5);
            $table->string('farmer_id',20);
            $table->string('farmer_name',30);
            $table->string('product_name',20);
            $table->string('amount',10);
            $table->string('price',10);
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
        Schema::dropIfExists('societysell');
    }
}
