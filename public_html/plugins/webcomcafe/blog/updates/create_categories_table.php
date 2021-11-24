<?php namespace Webcomcafe\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('webcomcafe_blog_categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->boolean('published')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('webcomcafe_blog_categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('webcomcafe_blog_categories');
    }
}
