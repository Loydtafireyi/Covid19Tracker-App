<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuarantinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarantines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('province_id');
            $table->string('quarantine_centre');
            $table->string('tollfree')->nullable();
            $table->string('telephone');
            $table->timestamps();

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
        Schema::dropIfExists('quarantines');
    }
}
