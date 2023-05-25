<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books_borrowed', function (Blueprint $table) {
            $table->increments('borrow_id');
            $table->integer('book_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('book_id')->references('book_id')->on('books');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->dateTime('borrowed_on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_borrowed');
    }
};
