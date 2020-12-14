<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantproducts', function (Blueprint $table) {
            $table->id();
            $table->string('plant_id',10);
            $table->string('product_id',10)->unique();
            $table->string('product_name',30);
            $table->string('product_short_name',20)->nullable();
            $table->string('product_type',20);
            $table->string('product_unit',20);
            $table->string('product_stock',10);
            $table->string('product_price',10);
            $table->string('product_offer',10)->nullable();
            $table->string('product_photo')->nullable();

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
        Schema::dropIfExists('plantproducts');
    }
}
