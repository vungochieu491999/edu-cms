<?php
namespace Edumad\Backend\Http\Controllers;
use App\Http\Controllers\Controller as BaseController;

class DashboardController extends BaseController
{
    /**
     * Display all users
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * @throws \Throwable
     */
    public function getIndex()
    {
        page_title()->setTitle(trans('core/backend::dashboard.title'));

        return view('core/backend::dashboard.index');
    }
}
