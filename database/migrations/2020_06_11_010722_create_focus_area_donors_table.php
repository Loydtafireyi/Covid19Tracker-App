<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFocusAreaDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('focus_area_donors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('focusarea_id');
            $table->unsignedBigInteger('donorname_id');
            $table->unsignedBigInteger('recieved_id');
            $table->timestamps();

            $table->index('focusarea_id');
            $table->index('donorname_id');
            $table->index('recieved_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('focus_area_donors');
    }
}
