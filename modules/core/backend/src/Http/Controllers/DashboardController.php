<?php
namespace Edumad\Backend\Http\Controllers;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Auth\Access\HandlesAuthorization;

class DashboardController extends BaseController
{
    use HandlesAuthorization;

    /**
     * Display all users
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * @throws \Throwable
     */
    public function getIndex()
    {
        $prefix = request()->route()->getPrefix();
        if (!$prefix || $prefix === config('core.base.general.admin_dir')) {
            $uri = explode('/', request()->route()->uri());
            $prefix = end($uri);
        }
        body_class()->setBodyClass(config('core.base.auth.body_dashboard_class'));
        page_title()->setTitle(trans('core/backend::dashboard.title'));

        return view('core/backend::dashboard.index');
    }
}
