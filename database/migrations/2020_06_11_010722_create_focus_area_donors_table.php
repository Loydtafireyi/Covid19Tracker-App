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
            $table->unsignedBigInteger('focus_area_id');
            $table->unsignedBigInteger('donor_name_id');
            $table->unsignedBigInteger('recieved_id');
            $table->timestamps();

            $table->index('focus_area_id');
            $table->index('donor_name_id');
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
