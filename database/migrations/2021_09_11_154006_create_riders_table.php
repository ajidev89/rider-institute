<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riders', function (Blueprint $table) {
            $table->id();
            $table->tinyText('surname')->nullable();
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->tinyText('firstName')->nullable();
            $table->tinyText('country')->nullable();
            $table->tinyText('State_of_Residence')->nullable();
            $table->tinyText('L_G_A')->nullable();
            $table->tinyText('address')->nullable();
            $table->tinyText('Telephone_Number')->nullable();
            $table->tinyText('NIN_number')->nullable();
            $table->tinyText('Date_of_Birth')->nullable();
            $table->tinyText('Specify_agent')->nullable();
            $table->tinyText('number_of_years')->nullable();
            $table->tinyText('riding/driving')->nullable();
            $table->tinyText('hailing/dispatcher')->nullable();
            $table->tinyText('license/Ridercard')->nullable();
            $table->tinyText('date_of_first_issuance')->nullable();
            $table->tinyText('nin_doc')->nullable();
            $table->tinyText('cv_doc')->nullable();
            $table->tinyText('riders_card_doc')->nullable();
            $table->tinyText('driver_license_doc')->nullable();
            $table->tinyText('utility_bills_doc')->nullable();
            $table->tinyText('educational_background');
            $table->tinyText('english_proficiency');
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
        Schema::dropIfExists('riders');
    }
}
