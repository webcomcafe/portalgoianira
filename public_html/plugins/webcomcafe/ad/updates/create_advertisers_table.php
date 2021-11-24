<?php namespace Webcomcafe\Ad\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAdvertisersTable extends Migration
{
    public function up()
    {
        Schema::create('webcomcafe_ad_advertisers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('webcomcafe_ad_advertisers');
    }
}
