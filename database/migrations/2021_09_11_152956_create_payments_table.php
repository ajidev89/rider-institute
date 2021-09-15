<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->tinytext('user_id');
            $table->tinytext('price');
            $table->tinytext('name_of_job');
            $table->tinytext('number_of_job');
            $table->tinytext('week');
            $table->boolean('credit')->default(0);
            $table->tinytext('verification');
            $table->tinytext('ReferenceCode');
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
        Schema::dropIfExists('payments');
    }
}
