<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->string('amount');
            $table->string('name');
            $table->string('email');
            $table->string('country');
            $table->string('phone');
            $table->string('tour_id');
            $table->string('tour_days');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('adults');
            $table->string('children');
            $table->string('message');
            $table->string('operator_id');
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
        Schema::dropIfExists('bids');
    }
}
