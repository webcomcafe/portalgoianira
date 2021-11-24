<?php namespace Webcomcafe\Register;

use Backend;
use System\Classes\PluginBase;

/**
 * Register Plugin Information File
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
            'name'        => 'Register',
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
            'Webcomcafe\Register\Components\MyComponent' => 'myComponent',
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
            'webcomcafe.register.some_permission' => [
                'tab' => 'Register',
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
            'register' => [
                'label'       => 'Register',
                'url'         => Backend::url('webcomcafe/register/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['webcomcafe.register.*'],
                'order'       => 500,
            ],
        ];
    }
}
