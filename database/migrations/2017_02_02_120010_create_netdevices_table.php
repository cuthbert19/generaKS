<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetdevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netdevices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('pcislot');
            $table->boolean('linkstatus')->default(false);
            $table->boolean('isbondmaster')->default(false);
            $table->integer('bondslave')->default(0);
            $table->ipAddress('ipaddr')->nullable();
            $table->string('netmask')->nullable();
            $table->string('gateway')->nullable();
            $table->string('bcksubnet')->nullable();
            $table->string('bckmask')->nullable();
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
        Schema::dropIfExists('netdevices');
    }
}
