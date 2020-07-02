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
            $table->bigIncrements('id');
            //connect to the plzs table via reference to plz table
            $table->unsignedBigInteger('plz_id');
            $table->text("Händler");

            //index for any foreign key
            $table->index('plz_id');  
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
        Schema::dropIfExists('autodealers');
    }
}
