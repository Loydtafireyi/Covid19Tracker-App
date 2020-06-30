<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('amount');
            $table->string('payment_method');
            $table->unsignedBigInteger('focus_area');
            $table->string('email');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('country');
            $table->unsignedBigInteger('province_id');
            $table->string('zip')->nullable();
            $table->timestamps();

            $table->index('focus_area');
            $table->index('province_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
