<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecievedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recieveds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('donor_name_id');
            $table->integer('amount');
            $table->timestamps();

            $table->index('donor_name_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recieveds');
    }
}
