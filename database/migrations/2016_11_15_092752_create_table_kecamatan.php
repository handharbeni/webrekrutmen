<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKecamatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatan', function(Illuminate\Database\Schema\Blueprint $table){
            $table->increments('id');
            $table->string('kecamatan', 100);
            $table->unsignedInteger('kota_id');
            $table->foreign('kota_id')
                ->references('id')->on('kota')
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
        Schema::drop('kecamatan');
    }
}
