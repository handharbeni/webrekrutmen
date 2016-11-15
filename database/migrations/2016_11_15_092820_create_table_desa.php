<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDesa extends Migration
{
 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa', function(Illuminate\Database\Schema\Blueprint $table){
            $table->increments('id');
            $table->string('desa', 100);
            $table->unsignedInteger('kecamatan_id');
            $table->foreign('kecamatan_id')
                ->references('id')->on('kecamatan')
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
        Schema::drop('desa');
    }
}
