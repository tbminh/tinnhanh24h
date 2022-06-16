<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cate_id');
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('author');
            $table->foreign('author')->references('id')->on('users')->onDelete('cascade');

            $table->string('title')->nullable();
            $table->string('content')->nullable();
            $table->integer('post_status')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('posts');
    }
}