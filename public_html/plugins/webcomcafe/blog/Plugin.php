<?php namespace Webcomcafe\Blog;

use Backend;
use System\Classes\PluginBase;

/**
 * Blog Plugin Information File
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
            'name'        => 'Blog',
            'description' => 'Blog de notícias',
            'author'      => 'Airton Lopes',
            'icon'        => 'icon-wordpress'
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
            'Webcomcafe\Blog\Components\Categories' => 'blogCategories',
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
            'webcomcafe.blog.categories' => [
                'tab' => 'Blog',
                'label' => 'Categorias'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array[]
     */
    public function registerNavigation(): array
    {
        return [
            'blog' => [
                'label'       => 'Blog',
                'url'         => Backend::url('webcomcafe/blog/posts'),
                'icon'        => 'icon-wordpress',
                'iconSvg'     => '/plugins/webcomcafe/blog/assets/images/blogger.png',
                'permissions' => ['webcomcafe.blog.posts'],
                'order'       => 500,

                'sideMenu' => [
                    'posts' => [
                        'label'       => 'Publicações',
                        'url'         => Backend::url('webcomcafe/blog/posts'),
                        'icon'      => 'icon-pencil-square-o',
                        'permissions' => ['webcomcafe.blog.posts'],
                    ],
                    'categories' => [
                        'label'       => 'Categorias',
                        'url'         => Backend::url('webcomcafe/blog/categories'),
                        'icon'        => 'icon-th-large',
                        'permissions' => ['webcomcafe.blog.categories'],
                    ],
                    'comments' => [
                        'label'       => 'Interações',
                        'url'         => Backend::url('webcomcafe/blog/comments'),
                        'icon'        => 'icon-commenting-o',
                        'permissions' => ['webcomcafe.blog.comments'],
                    ]
                ]
            ],
        ];
    }

    /**
     * @return array
     */
    public function registerListColumnTypes(): array
    {
        return (new \Webcomcafe\Blog\Classes\Backend\CustomColumnTypes())->all();
    }

    /**
     * @return \Closure[][]
     */
    public function registerMarkupTags(): array
    {
        return [
            'filters' => [
                'hs' => function($name) {
                    return file_get_contents(themes_path('portal/assets/images/icons/'.$name.'.svg'));
                }
            ]
        ];
    }
}
