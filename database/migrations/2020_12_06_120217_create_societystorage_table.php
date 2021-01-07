<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocietystorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societystorage', function (Blueprint $table) {
            $table->id();
            $table->string('storage_id',20)->unique();
            $table->string('store_by_id',20);
            $table->string('product_id',20);
            $table->string('product_name',30);
            $table->string('product_unit',20);
            $table->string('each_sell_price',10);
            $table->string('total_stock',10);
            $table->string('market_sell_price',10)->nullable();
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
        Schema::dropIfExists('societystorage');
    }
}
