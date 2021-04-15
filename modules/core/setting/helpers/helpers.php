<?php

use Edumad\Setting\Facades\SettingFacade;
use Edumad\Setting\Supports\SettingStore;

if(!function_exists('setting')){
    /**
     * Get the setting instance.
     *
     * @param $key
     * @param $default
     * @return array|\Botble\Setting\Supports\SettingStore|string|null
     */
    function setting($key = null, $default = null)
    {
        if (!empty($key)) {
            try {
                return SettingStore::get($key, $default);
            } catch (Exception $exception) {
                info($exception->getMessage());
                return $default;
            }
        }

        return SettingFacade::getFacadeRoot();
    }
}
