<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatechartformulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratechartformula', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',20);
            $table->string('frmula_id',20)->unique();
            $table->string('frmula_name',30)->unique();
            $table->string('val_of_a',10);
            $table->string('val_of_b',10);
            $table->string('formula',30);
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
        Schema::dropIfExists('ratechartformula');
    }
}
