<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEmergencyFriendsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_emergency_friends_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('friendName')->nullable();
            $table->string('friendWork')->nullable();
            $table->string('friendMobile')->nullable();
            $table->string('friendAdress')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();


            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


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
        Schema::dropIfExists('user_emergency_friends_infos');
    }
}
