<?php

namespace Edumad\Setting\Facades {

    use Edumad\Setting\Supports\DatabaseSettingStore;

    class SettingFacades {
        public static function get($key, $default = null)
        {
            //Method inherited from \Edumad\Setting\Supports\SettingStore
            /** @var \Edumad\Setting\Supports\DatabaseSettingStore $instance */
            return (new DatabaseSettingStore)->get($key, $default);
        }
    }
}

namespace {

    class Auth extends \Illuminate\Support\Facades\Auth {}

    class Setting extends \Edumad\Setting\Facades\SettingFacades {}
}
