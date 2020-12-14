<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id();
            $table->string('plant_id',20);
            $table->string('order_id',20)->nullable();
            $table->string('cart_add_id',20)->unique();
            $table->string('order_by_id',20);
            $table->string('order_by_work',30);
            $table->string('product_id',20);
            $table->string('product_name',30);
            $table->string('product_quantity',10);
            $table->string('sell_price_each',10);
            $table->string('order_status',10)->nullable();
            $table->string('plant_status',10)->nullable();
            $table->string('vehicle_status',10)->nullable();
            $table->string('order_by_status',10)->nullable();
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
        Schema::dropIfExists('orderdetails');
    }
}
