<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('slug');
            $table->text('meta_description', 250);
            $table->string('social_media_title');
            $table->longText('content');
            $table->boolean('published');

            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            $table->dateTime('published_date');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
