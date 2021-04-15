<?php


use Edumad\Base\Facades\PageTitleFacade;
use Edumad\Base\Supports\PageTitle;

if (!function_exists('page_title')) {
    /**
     * @return PageTitle
     */
    function page_title()
    {
        return PageTitleFacade::getFacadeRoot();
    }
}
