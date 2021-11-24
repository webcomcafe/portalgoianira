<?php namespace Webcomcafe\Meteorology;

use Backend;
use System\Classes\PluginBase;

/**
 * Meteorology Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Meteorologia',
            'description' => 'Previsão do tempo',
            'author'      => 'Webcomcafe',
            'icon'        => 'icon-mixcloud'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Webcomcafe\Meteorology\Components\Meteorology' => 'Meteorology',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'webcomcafe.meteorology.some_permission' => [
                'tab' => 'Meteorology',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'meteorology' => [
                'label'       => 'Meteorology',
                'url'         => Backend::url('webcomcafe/meteorology/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['webcomcafe.meteorology.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'date_tense' => [\Webcomcafe\Meteorology\Classes\Extensions::class, 'tense']
            ]
        ];
    }
}
