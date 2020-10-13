<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnswerAddRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('questions', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->change();
        });

        Schema::table('answers', function (Blueprint $table) {
            //$table->dropColumn('question');
            //$table->integer('question')->unsigned();
            //$table->foreign('id')->references('question')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
