<?php
namespace Edumad\Base\Providers;


use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    public function register(){}

    public function boot()
    {
        $this->loadRoutesFrom(base_path() . '/modules/core/backend/routes/web.php');
        $this->loadViewsFrom(base_path() . '/modules/core/backend/resources/views', 'core/base');
    }
}
