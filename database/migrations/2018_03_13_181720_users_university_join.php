<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersUniversityJoin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_university_join', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('university_id');

//            $table->foreign('user_id')->references('id')->on('users')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
//
//            $table->foreign('university_id')->references('id')->on('universities')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_university_join');
    }
}
