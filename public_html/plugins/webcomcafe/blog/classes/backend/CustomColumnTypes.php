<?php

namespace Webcomcafe\Blog\Classes\Backend;

/**
 * Class CustomColumnTypes
 * @package Webcomcafe\Blog\Classes\Backend
 */

class CustomColumnTypes
{
    /**
     * Tipos
     *
     * @var array|string[]
     */
    private array $types = [
        'tooltip', 'route'
    ];

    /**
     * Retorna os tipos definidos
     *
     * @return array
     */
    public function all(): array
    {
        return $this->map([$this, 'config'], $this->types);
    }

    /**
     * Monta o nome do método a ser invocado para o tipo
     *
     * @param $type
     * @return array[]
     */
    final public function config($type): array
    {
        $name = camel_case('set_'.$type.'_Type');
        return [$type => [$this, $name]];
    }

    /**
     * @param callable $callback
     * @param array $arr
     * @return array
     */
    private function map(callable $callback, array $arr) : array
    {
        $res = [];
        foreach ($arr as $item) {
            $value = $callback($item);
            $key = key($value);
            $res[$key] = $value[$key];
        }
        return $res;
    }

    /**
     * @param $value
     * @param $column
     * @return string
     */
    public function setTooltipType($value, $column): string
    {
        $str = str_limit($value, $column->config['limit'] ?? 100);
        return <<<span
<span title="$value" data-toggle="tooltip" data-placement="right">$str</span>
span;
    }


    /**
     * @param $_
     * @param $column
     * @param $record
     * @return string
     */
    public function setRouteType($_, $column, $record): string
    {
        $find = function($m) use ($record) {
            return $record->{$m['P']};
        };

        $url = \Backend::url (
            preg_replace_callback('/:(?<P>[^\/]+)/mi', $find, $column->path)
        );

        $icon = $column->config['icon'] ?? 'oc-icon-edit';
        $label = isset($column->label) && $column->label ? $column->label : 'Alterar';

        return <<<a
<a href="$url" class="btn btn-sm btn-primary $icon">$label</a>
a;

    }
}
