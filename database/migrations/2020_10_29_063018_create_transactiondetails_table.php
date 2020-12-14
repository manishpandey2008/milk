<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactiondetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactiondetails', function (Blueprint $table) {
            $table->id();
            $table->string('plant_id',30);
            $table->string('transaction_id',30)->unique();
            $table->string('transaction_from',30);
            $table->string('transaction_from_id',30);
            $table->string('transaction_to',30);
            $table->string('transaction_to_id',30);
            $table->string('transaction_amount',10);
            $table->string('transaction_status',20);
            $table->string('transaction_msg');
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
        Schema::dropIfExists('transactiondetails');
    }
}
