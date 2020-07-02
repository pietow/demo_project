<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutodealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autodealers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('plz_id')->unsigned();
            $table->text("Händler");

            $table->foreign('plz_id')->references('id')->on('plzs')->onDelete('cascade');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autodealers');
    }
}
