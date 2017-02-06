<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterfacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interfaces', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('device');
            $table->string('pcislot');
            $table->boolean('linkstatus');
            $table->boolean('isbondmaster');
            $table->string('bondslave');
            $table->ipAddress('ipaddr');
            $table->string('netmask');
            $table->string('gateway');
            $table->string('bcksubnet');
            $table->string('bckmask');
            $table->integer('host_id')->unsigned();
            $table->foreign('host_id')->references('id')->on('hosts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interfaces');
    }
}
