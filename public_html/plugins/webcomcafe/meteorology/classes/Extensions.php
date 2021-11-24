<?php namespace Webcomcafe\Meteorology\Classes;

class Extensions
{
    /**
     * @param $date
     * @return string
     */
    public static function tense($date): string
    {
        $d = date('d');
        $m = date('F');
        $y = date('Y');

        return sprintf('%s de %s de %s', $d, $m, $y);
    }
}
