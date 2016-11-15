<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kota', function(Illuminate\Database\Schema\Blueprint $table){
            $table->increments('id');
            $table->string('kota', 100);
            $table->unsignedInteger('propinsi_id');
            $table->foreign('propinsi_id')
                ->references('id')->on('propinsi')
                ->onDelete('cascade');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kota');
    }
}
