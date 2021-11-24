<?php namespace Webcomcafe\Meteorology\Components;

use Cms\Classes\ComponentBase;
use Webcomcafe\Meteorology\Models\Weather;

class Meteorology extends ComponentBase
{
    public Weather $weather;

    public function componentDetails()
    {
        return [
            'name'        => 'Previsão',
            'description' => 'Amostras de previsão do tempo'
        ];
    }

    public function init()
    {
        $this->weather = Weather::today();
    }

    public function defineProperties()
    {
        return [];
    }
}
