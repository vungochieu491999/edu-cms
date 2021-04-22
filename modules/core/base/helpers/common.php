<?php


use Edumad\Base\Facades\DashboardMenuFacades;
use Edumad\Base\Facades\PageBodyFacade;
use Edumad\Base\Facades\PageTitleFacade;
use Edumad\Base\Supports\DashboardMenu;
use Edumad\Base\Supports\PageBody;
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


if (!function_exists('body_class')) {
    /**
     * @return PageBody
     */
    function body_class()
    {
        return PageBodyFacade::getFacadeRoot();
    }
}


if (!function_exists('dashboard_menu')) {
    /**
     * @return DashboardMenu
     */
    function dashboard_menu()
    {
        return DashboardMenuFacades::getFacadeRoot();
    }
}
