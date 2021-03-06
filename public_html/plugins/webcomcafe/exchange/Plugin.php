<?php namespace Webcomcafe\Exchange;

use Backend;
use System\Classes\PluginBase;

/**
 * Exchange Plugin Information File
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
            'name'        => 'Exchange',
            'description' => 'No description provided yet...',
            'author'      => 'Webcomcafe',
            'icon'        => 'icon-leaf'
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
        return []; // Remove this line to activate

        return [
            'Webcomcafe\Exchange\Components\MyComponent' => 'myComponent',
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
            'webcomcafe.exchange.some_permission' => [
                'tab' => 'Exchange',
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
            'exchange' => [
                'label'       => 'Exchange',
                'url'         => Backend::url('webcomcafe/exchange/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['webcomcafe.exchange.*'],
                'order'       => 500,
            ],
        ];
    }
}
