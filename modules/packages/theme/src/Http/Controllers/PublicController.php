<?php
namespace Edumad\Theme\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class PublicController extends BaseController
{
    public function getIndex()
    {
        return view('packages/theme::index');
    }
}
