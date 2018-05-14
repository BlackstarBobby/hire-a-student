<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeUserForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resume_user', function (Blueprint $table ){
           $table->foreign('user_id')->references('id')->on('users')
               ->onUpdate('cascade')
               ->onDelete('cascade');

            $table->foreign('resume_id')->references('id')->on('resumes')
                ->onUpdate('cascade')
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
        Schema::table('resume_user', function (Blueprint $table ){
            $table->dropForeign('resume_user_user_id_foreign');
            $table->dropForeign('resume_user_resume_id_foreign');
        });
    }
}
