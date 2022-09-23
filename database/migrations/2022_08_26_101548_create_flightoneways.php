<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightoneways extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flightoneways', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pnr_number')->default('KD5WEK1');
            $table->string('booking_ref')->default('T3BRF-230564');
            $table->string('trip_id')->default('AGN1801GRETOPORD1060');
            $table->json('general_info')->nullable();
            $table->json('depart_info')->nullable();
            $table->json('fullname')->nullable();
            $table->json('layover_depart')->nullable();
            $table->json('layover_namedepart')->nullable();
            $table->string('booking_status')->default('Confirmed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flightoneways');
    }
}
