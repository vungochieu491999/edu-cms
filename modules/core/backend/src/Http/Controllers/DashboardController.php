<?php
namespace Edumad\Backend\Http\Controllers;
use App\Http\Controllers\Controller as BaseController;
use Edumad\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

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
        body_class()->setBodyClass(config('core.base.auth.body_dashboard_class'));
        page_title()->setTitle(trans('core/backend::dashboard.title'));

        return view('core/backend::dashboard.index');
    }
}
