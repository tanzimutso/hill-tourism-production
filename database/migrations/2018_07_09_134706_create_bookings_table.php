<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehicle_type_id');
            $table->string('token');
            $table->string('travelling_from');
            $table->string('travelling_to');
            $table->string('customer_name');
            $table->string('customer_email')->unique();
            $table->string('customer_contact_no');
            $table->date('booking_date');
            $table->string('transaction_no')->unique();
            $table->string('payment_status');
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
        Schema::dropIfExists('bookings');
    }
}
