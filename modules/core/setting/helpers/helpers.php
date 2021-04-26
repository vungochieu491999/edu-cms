<?php

use Edumad\Setting\Facades\SettingFacade;
use Illuminate\Support\Facades\Auth;

if(!function_exists('setting')){
    /**
     * Get the setting instance.
     *
     * @param $key
     * @param $default
     * @return string
     */
    function setting($key = null, $default = null)
    {
        if (!empty($key)) {
            try {
                return Setting::get($key, $default);
            } catch (Exception $exception) {
                info($exception->getMessage());
                return $default;
            }
        }

        return SettingFacade::getFacadeRoot();
    }
}


if(!function_exists('set_auth_model')){

    function set_auth_model($model)
    {
        $closure = (function ($model) { $this->model = $model; });

        $closure = $closure->bindTo(Auth::getProvider());

        $closure($model);
    }
}
