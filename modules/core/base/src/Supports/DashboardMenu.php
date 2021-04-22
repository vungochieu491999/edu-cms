<?php

namespace Edumad\Base\Supports;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use RuntimeException;

class DashboardMenu
{
    /**
     * @var string
     */
    protected $links = [];

    /**
     * Add link
     * @param array $options
     * @return DashboardMenu
     */
    public function registerItem($options = [])
    {
        if (isset($options['children'])) {
            unset($options['children']);
        }

        $defaultOptions = [
            'id'          => '',
            'priority'    => 99,
            'parent_id'   => null,
            'name'        => '',
            'icon'        => null,
            'url'         => '',
            'children'    => [],
            'permissions' => [],
            'active'      => false,
        ];

        $options = array_merge($defaultOptions, $options);
        $id = $options['id'];

        if (!$id) {
            $calledClass = isset(debug_backtrace()[1]) ?
                debug_backtrace()[1]['class'] . '@' . debug_backtrace()[1]['function']
                :
                null;
            throw new RuntimeException('Menu id not specified: ' . $calledClass);
        }

        if (isset($this->links[$id]) && $this->links[$id]['name'] && !app()->runningInConsole()) {
            $calledClass = isset(debug_backtrace()[1]) ?
                debug_backtrace()[1]['class'] . '@' . debug_backtrace()[1]['function']
                :
                null;
            throw new RuntimeException('Menu id already exists: ' . $id . ' on class ' . $calledClass);
        }

        if (isset($this->links[$id])) {

            $options['children'] = array_merge($options['children'], $this->links[$id]['children']);
            $options['permissions'] = array_merge($options['permissions'], $this->links[$id]['permissions']);

            $this->links[$id] = array_replace($this->links[$id], $options);

            return $this;
        }

        if ($options['parent_id']) {
            if (!isset($this->links[$options['parent_id']])) {
                $this->links[$options['parent_id']] = ['id' => $options['parent_id']] + $defaultOptions;
            }

            $this->links[$options['parent_id']]['children'][] = $options;

            $permissions = array_merge($this->links[$options['parent_id']]['permissions'], $options['permissions']);
            $this->links[$options['parent_id']]['permissions'] = $permissions;
        } else {
            $this->links[$id] = $options;
        }

        return $this;
    }

    /**
     * Rearrange links
     * @return \Illuminate\Support\Collection
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws \Exception
     */
    public function getAll()
    {
        $currentUrl = URL::full();

        $prefix = request()->route()->getPrefix();
        if (!$prefix || $prefix === config('core.base.general.admin_dir')) {
            $uri = explode('/', request()->route()->uri());
            $prefix = end($uri);
        }

        $routePrefix = '/' . $prefix;

        if (setting('cache_admin_menu_enable', true) && Auth::check()) {
            $cache_key = md5('cache-dashboard-menu-' . Auth::user()->getKey());
            if (!cache()->has($cache_key)) {
                $links = $this->links;
                cache()->forever($cache_key, $links);
            } else {
                $links = cache($cache_key);
            }
        } else {
            $links = $this->links;
        }

        if(!empty($links)){
            foreach ($links as $key => &$link) {

                if (!Auth::user()->hasAccess($link['permissions'])) {
                    Arr::forget($links, $key);
                    continue;
                }

                $link['active'] = $currentUrl == $link['url'] ||
                    (Str::contains($link['url'], $routePrefix) && $routePrefix != '//');
                if (!count($link['children'])) {
                    continue;
                }

                $link['children'] = collect($link['children'])->sortBy('priority')->toArray();

                foreach ($link['children'] as $sub_key => $sub_menu) {
                    if (!Auth::user()->hasAccess($sub_menu['permissions'])) {
                        Arr::forget($link['children'], $sub_key);
                        continue;
                    }

                    if ($currentUrl == $sub_menu['url'] ||
                        (Str::contains($sub_menu['url'], $routePrefix) && $routePrefix != '//')
                    ) {
                        $link['children'][$sub_key]['active'] = true;
                        $link['active'] = true;
                    }
                }
            }
        }
        return collect($links)->sortBy('priority');
    }
}
