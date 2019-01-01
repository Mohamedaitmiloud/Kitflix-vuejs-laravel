<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('imdb_code');
            $table->string('title_english');
            $table->string('title_long');
            $table->string('slug');
            $table->integer('year');
            $table->float('rating');
            $table->integer('runtime');
            $table->text('description_full');
            $table->string('yt_trailer_code');
            $table->string('language');
            $table->string('medium_cover_image');
            $table->string('large_cover_image');
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
        Schema::dropIfExists('movies');
    }
}
