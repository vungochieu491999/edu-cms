<?php
namespace Edumad\Theme\Providers;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        $this->loadRoutesFrom(base_path() . '/modules/packages/theme/routes/public.php');
        $this->loadViewsFrom(base_path() . '/modules/packages/theme/resources/views', 'packages/public');
        $this->loadRoutesFrom(base_path() . '/modules/themes/edu-max/routes/web.php');
        $this->loadViewsFrom(base_path() . '/modules/themes/edu-max/views', 'packages/theme');
    }
}
