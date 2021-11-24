<?php

namespace Webcomcafe\Blog\Classes\Backend;

trait Common
{
    protected function addAssets()
    {
        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/webcomcafe/blog/assets/css/backend.css');
        $this->addJs('/plugins/webcomcafe/blog/assets/vendor/autosize/autosize.min.js');
        $this->addJs('/plugins/webcomcafe/blog/assets/js/backend.js');
    }
}
