<?php namespace Webcomcafe\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('webcomcafe_blog_posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('tags');
            $table->longText('content');
            $table->text('excerpt')->nullable();
            $table->string('layout', 16);
            $table->boolean('published')->default(0);
            $table->boolean('subscriber')->default(0);
            $table->dateTime('published_at')->nullable();
            $table->dateTime('finished_at')->nullable();
            $table->integer('views')->unsigned()->default(0);
            $table->integer('liked')->unsigned()->default(0);
            $table->integer('unliked')->unsigned()->default(0);
            $table->integer('share')->unsigned()->default(0);
            $table->timestamps();
        });

        Schema::create('webcomcafe_blog_category_post', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['post_id', 'category_id']);
        });

        Schema::create('webcomcafe_blog_author_post', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->primary(['post_id', 'user_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('webcomcafe_blog_posts');
        Schema::dropIfExists('webcomcafe_blog_category_post');
        Schema::dropIfExists('webcomcafe_blog_author_post');
    }
}
