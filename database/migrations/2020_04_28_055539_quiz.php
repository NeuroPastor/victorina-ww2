<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Quiz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->text('fullname');
            $table->text('school');
            $table->text('classOfSchool');
            $table->text('TeacherFullname');
            $table->text('birthDate');
            $table->text('codeword');
            $table->text('greeting');
            $table->integer('rating');
        });
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('memberId');
            $table->text('answerId');
            $table->text('answer');
            $table->text('isCorrect');
            $table->text('answerRating');
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
