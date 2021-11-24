<?php namespace Webcomcafe\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('webcomcafe_blog_comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('reply_to_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->text('content');
            $table->integer('liked')->unsigned()->default(0);
            $table->integer('unliked')->unsigned()->default(0);
            $table->integer('share')->unsigned()->default(0);
            $table->timestamps();

            $table->foreign('reply_to_id')->references('id')->on('webcomcafe_blog_comments');
            $table->foreign('author_id')->references('id')->on('backend_users');
            $table->foreign('post_id')->references('id')->on('webcomcafe_blog_posts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('webcomcafe_blog_comments');
    }
}
