<?php

namespace Edumad\Base\Facades;

use Edumad\Base\Supports\DashboardMenu;
use Illuminate\Support\Facades\Facade;

class DashboardMenuFacades extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DashboardMenu::class;
    }
}
