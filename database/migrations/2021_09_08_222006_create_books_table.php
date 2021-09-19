<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('book_name');
            $table->string('author_name');
            $table->integer('number_of_vo');
            $table->integer('book_copies');
            $table->string('book_price');
            $table->string('Dar_Al_nasher');
            $table->string('book_rating');
            $table->string('book_location');
            $table->string('book_status');
            $table->timestamps();
        });
        Schema::create('book_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('return_book_date')->nullable();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('book_id');
            $table->unique(['student_id' , 'book_id']);
            $table->timestamps();

             $table->foreign('student_id')
                  ->references('id')
                  ->on('students')
                  ->onDelete('cascade');
             $table->foreign('book_id')
                  ->references('id')
                  ->on('books')
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
        Schema::dropIfExists('books');
    }
}
