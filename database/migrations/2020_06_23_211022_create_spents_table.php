<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('spent');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('focus_area_id');
            $table->timestamps();

            $table->index('product_id');
            $table->index('focus_area_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spents');
    }
}
