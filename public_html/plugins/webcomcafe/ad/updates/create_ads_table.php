<?php namespace Webcomcafe\Ad\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAdsTable extends Migration
{
    public function up()
    {
        Schema::create('webcomcafe_ad_ads', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('webcomcafe_ad_ads');
    }
}
