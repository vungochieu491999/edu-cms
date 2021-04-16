<?php

namespace Edumad\Base\Facades;

use Edumad\Base\Supports\PageBody;
use Illuminate\Support\Facades\Facade;

class PageBodyFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return PageBody::class;
    }
}
