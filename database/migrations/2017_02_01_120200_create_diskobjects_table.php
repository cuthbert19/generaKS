<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiskobjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diskobjects', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('device');
            $table->string('devicetype');
            $table->integer('size')->default(0);
            $table->string('fstype')->nullable();
            $table->string('logicalname')->nullable();
            $table->integer('partitioning_id')->unsigned();
            $table->foreign('partitioning_id')->references('id')->on('partitionings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diskobjects');
    }
}
