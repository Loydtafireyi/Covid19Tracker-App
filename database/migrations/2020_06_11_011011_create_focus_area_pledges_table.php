<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFocusAreaPledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('focus_area_pledges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pledge_id');
            $table->unsignedBigInteger('donor_name_id');
            $table->timestamps();

            $table->index('pledge_id');
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
        Schema::dropIfExists('focus_area_pledges');
    }
}
