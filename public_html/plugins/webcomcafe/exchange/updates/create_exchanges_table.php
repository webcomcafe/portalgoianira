<?php namespace Webcomcafe\Exchange\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateExchangesTable extends Migration
{
    public function up()
    {
        Schema::create('webcomcafe_exchange_exchanges', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('webcomcafe_exchange_exchanges');
    }
}
