<?php namespace Webcomcafe\Ad;

use Backend;
use System\Classes\PluginBase;

/**
 * Ad Plugin Information File
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
            'name'        => 'Ad',
            'description' => 'Anúncios',
            'author'      => 'Airton Lopes',
            'icon'        => 'icon-bullhorn'
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
            'Webcomcafe\Ad\Components\Ads' => 'Ads',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'webcomcafe.ad.ads' => [
                'tab' => 'Anúncios',
                'label' => 'Gerenciar anúncios'
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
        return [
            'ad' => [
                'label'       => 'Anúncios',
                'url'         => Backend::url('webcomcafe/ad/ads'),
                'icon'        => 'icon-bullhorn',
                'permissions' => ['webcomcafe.ad.ads'],
                'order'       => 600,

                'sideMenu' => [
                    'ad' => [
                        'label'       => 'Anúncios',
                        'url'         => Backend::url('webcomcafe/ad/ads'),
                        'icon'        => 'icon-pie-chart',
                        'permissions' => ['webcomcafe.ad.ads'],
                    ],
                    'advertisers' => [
                        'label'       => 'Anunciantes',
                        'url'         => Backend::url('webcomcafe/ad/advertisers'),
                        'icon'        => 'icon-address-book',
                        'permissions' => ['webcomcafe.ad.advertisers'],
                    ]
                ]
            ],
        ];
    }
}
