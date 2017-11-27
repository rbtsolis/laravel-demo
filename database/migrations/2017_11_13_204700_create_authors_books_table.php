<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_books', function (Blueprint $table) {
            $table -> increments('id');

            $table -> integer('author_id') -> unsigned();
            $table -> integer('book_id') -> unsigned();
  
            $table -> foreign('author_id') -> references('id') -> on('authors') -> onDelete('cascade');
            $table -> foreign('book_id') -> references('id') -> on('books') -> onDelete('cascade');

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors_books');
    }
}
