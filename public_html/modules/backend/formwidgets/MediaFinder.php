<?php namespace Backend\FormWidgets;

use Media\FormWidgets\MediaFinder as MediaMediaFinder;

/**
 * Media Finder
 * Renders a record finder field.
 *
 *    image:
 *        label: Some image
 *        type: media
 *        prompt: Click the %s button to find a user
 *
 * @package october\backend
 * @author Alexey Bobkov, Samuel Georges
 * @deprecated Use Media\FormWidgets\MediaFinder. Remove if year >= 2021.
 */
class MediaFinder extends MediaMediaFinder
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        traceLog('FormWidget Backend\FormWidgets\MediaFinder has been deprecated, use ' . MediaMediaFinder::class . ' instead.');

        $this->assetPath = '/modules/media/formwidgets/mediafinder/assets';
        $this->viewPath = base_path('/modules/media/formwidgets/mediafinder/partials');

        parent::__construct(...func_get_args());
    }
}
