<?php namespace Webcomcafe\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCategoryNestedFields extends Migration
{
    public function up()
    {
        Schema::table('webcomcafe_blog_categories', function (Blueprint $table) {
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
        });
    }

    public function down()
    {
        Schema::table('webcomcafe_blog_categories', function(Blueprint $table){
            $table->dropColumn(['nest_left', 'nest_right', 'nest_depth']);
        });
    }
}
