<?php namespace Webcomcafe\Blog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Webcomcafe\Blog\Classes\Backend\Common;

/**
 * Posts Back-end Controller
 */
class Posts extends Controller
{
    use Common;

    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    /**
     * @var string Configuration file for the `FormController` behavior.
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string Configuration file for the `ListController` behavior.
     */
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Webcomcafe.Blog', 'blog', 'posts');

        $this->addAssets();
    }

    public function onSave()
    {
        sleep(10);
    }

}
