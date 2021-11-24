<?php namespace Webcomcafe\Meteorology\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateWeatherTable extends Migration
{
    public function up()
    {
        Schema::create('webcomcafe_meteorology_weather', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('local', 100);
            $table->string('coordinates', 30);
            $table->date('when');
            $table->string('period', 30);
            $table->char('min', 3);
            $table->char('max', 3);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('webcomcafe_meteorology_weather');
    }
}
