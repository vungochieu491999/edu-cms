<?php
namespace Edumad\Base\Providers;


use Edumad\Base\Supports\Helper;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    public function register(){
        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->loadRoutesFrom(base_path() . '/modules/core/backend/routes/web.php');
        $this->loadViewsFrom(base_path() . '/modules/core/backend/resources/views', 'core/backend');
        $this->loadTranslationsFrom(base_path().'/modules/core/backend/resources/lang/', 'core/backend');

//        Event::listen(RouteMatched::class, function () {
//            dashboard_menu()
//                ->registerItem([
//                    'id'          => 'cms-core-dashboard',
//                    'priority'    => 0,
//                    'parent_id'   => null,
//                    'name'        => 'core/base::layouts.dashboard',
//                    'icon'        => 'fa fa-home',
//                    'url'         => route('dashboard.index'),
//                    'permissions' => 'dashboard.index',
//                ]);
//        });
    }
}
