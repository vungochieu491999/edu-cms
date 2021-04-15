<?php

namespace Edumad\Backend\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function __contruct(){}

    /**
     * Display all users
     * @param UserTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * @throws \Throwable
     */
    public function getIndex()
    {
        page_title()->setTitle(trans('core/backend::users.users'));

        return view('core/backend::layouts.app');
    }

    /**
     * @param string $lang
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws Exception
     */
    public function getLanguage($lang, Request $request)
    {
        if ($lang != false && array_key_exists($lang, Assets::getAdminLocales())) {
            if (Auth::check()) {
                UserMeta::setMeta('admin-locale', $lang);
                cache()->forget(md5('cache-dashboard-menu-' . $request->user()->getKey()));
            }
            session()->put('admin-locale', $lang);
        }

        return redirect()->back();
    }
}
