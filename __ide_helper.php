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

namespace Illuminate\Support\Facades {

//    class URL {
//
//        /**
//         * Get the full URL for the current request.
//         *
//         * @return string
//         * @static
//         */
//        public static function full()
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->full();
//        }
//
//        /**
//         * Get the current URL for the request.
//         *
//         * @return string
//         * @static
//         */
//        public static function current()
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->current();
//        }
//
//        /**
//         * Get the URL for the previous request.
//         *
//         * @param mixed $fallback
//         * @return string
//         * @static
//         */
//        public static function previous($fallback = false)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->previous($fallback);
//        }
//
//        /**
//         * Generate an absolute URL to the given path.
//         *
//         * @param string $path
//         * @param mixed $extra
//         * @param bool|null $secure
//         * @return string
//         * @static
//         */
//        public static function to($path, $extra = array(), $secure = null)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->to($path, $extra, $secure);
//        }
//
//        /**
//         * Generate a secure, absolute URL to the given path.
//         *
//         * @param string $path
//         * @param array $parameters
//         * @return string
//         * @static
//         */
//        public static function secure($path, $parameters = array())
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->secure($path, $parameters);
//        }
//
//        /**
//         * Generate the URL to an application asset.
//         *
//         * @param string $path
//         * @param bool|null $secure
//         * @return string
//         * @static
//         */
//        public static function asset($path, $secure = null)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->asset($path, $secure);
//        }
//
//        /**
//         * Generate the URL to a secure asset.
//         *
//         * @param string $path
//         * @return string
//         * @static
//         */
//        public static function secureAsset($path)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->secureAsset($path);
//        }
//
//        /**
//         * Generate the URL to an asset from a custom root domain such as CDN, etc.
//         *
//         * @param string $root
//         * @param string $path
//         * @param bool|null $secure
//         * @return string
//         * @static
//         */
//        public static function assetFrom($root, $path, $secure = null)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->assetFrom($root, $path, $secure);
//        }
//
//        /**
//         * Get the default scheme for a raw URL.
//         *
//         * @param bool|null $secure
//         * @return string
//         * @static
//         */
//        public static function formatScheme($secure = null)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->formatScheme($secure);
//        }
//
//        /**
//         * Create a signed route URL for a named route.
//         *
//         * @param string $name
//         * @param array $parameters
//         * @param \DateTimeInterface|\DateInterval|int|null $expiration
//         * @param bool $absolute
//         * @return string
//         * @throws \InvalidArgumentException
//         * @static
//         */
//        public static function signedRoute($name, $parameters = array(), $expiration = null, $absolute = true)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->signedRoute($name, $parameters, $expiration, $absolute);
//        }
//
//        /**
//         * Create a temporary signed route URL for a named route.
//         *
//         * @param string $name
//         * @param \DateTimeInterface|\DateInterval|int $expiration
//         * @param array $parameters
//         * @param bool $absolute
//         * @return string
//         * @static
//         */
//        public static function temporarySignedRoute($name, $expiration, $parameters = array(), $absolute = true)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->temporarySignedRoute($name, $expiration, $parameters, $absolute);
//        }
//
//        /**
//         * Determine if the given request has a valid signature.
//         *
//         * @param \Illuminate\Http\Request $request
//         * @param bool $absolute
//         * @return bool
//         * @static
//         */
//        public static function hasValidSignature($request, $absolute = true)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->hasValidSignature($request, $absolute);
//        }
//
//        /**
//         * Determine if the signature from the given request matches the URL.
//         *
//         * @param \Illuminate\Http\Request $request
//         * @param bool $absolute
//         * @return bool
//         * @static
//         */
//        public static function hasCorrectSignature($request, $absolute = true)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->hasCorrectSignature($request, $absolute);
//        }
//
//        /**
//         * Determine if the expires timestamp from the given request is not from the past.
//         *
//         * @param \Illuminate\Http\Request $request
//         * @return bool
//         * @static
//         */
//        public static function signatureHasNotExpired($request)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->signatureHasNotExpired($request);
//        }
//
//        /**
//         * Get the URL to a named route.
//         *
//         * @param string $name
//         * @param mixed $parameters
//         * @param bool $absolute
//         * @return string
//         * @throws \Symfony\Component\Routing\Exception\RouteNotFoundException
//         * @static
//         */
//        public static function route($name, $parameters = array(), $absolute = true)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->route($name, $parameters, $absolute);
//        }
//
//        /**
//         * Get the URL for a given route instance.
//         *
//         * @param \Illuminate\Routing\Route $route
//         * @param mixed $parameters
//         * @param bool $absolute
//         * @return string
//         * @throws \Illuminate\Routing\Exceptions\UrlGenerationException
//         * @static
//         */
//        public static function toRoute($route, $parameters, $absolute)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->toRoute($route, $parameters, $absolute);
//        }
//
//        /**
//         * Get the URL to a controller action.
//         *
//         * @param string|array $action
//         * @param mixed $parameters
//         * @param bool $absolute
//         * @return string
//         * @throws \InvalidArgumentException
//         * @static
//         */
//        public static function action($action, $parameters = array(), $absolute = true)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->action($action, $parameters, $absolute);
//        }
//
//        /**
//         * Format the array of URL parameters.
//         *
//         * @param mixed|array $parameters
//         * @return array
//         * @static
//         */
//        public static function formatParameters($parameters)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->formatParameters($parameters);
//        }
//
//        /**
//         * Get the base URL for the request.
//         *
//         * @param string $scheme
//         * @param string|null $root
//         * @return string
//         * @static
//         */
//        public static function formatRoot($scheme, $root = null)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->formatRoot($scheme, $root);
//        }
//
//        /**
//         * Format the given URL segments into a single URL.
//         *
//         * @param string $root
//         * @param string $path
//         * @param \Illuminate\Routing\Route|null $route
//         * @return string
//         * @static
//         */
//        public static function format($root, $path, $route = null)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->format($root, $path, $route);
//        }
//
//        /**
//         * Determine if the given path is a valid URL.
//         *
//         * @param string $path
//         * @return bool
//         * @static
//         */
//        public static function isValidUrl($path)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->isValidUrl($path);
//        }
//
//        /**
//         * Set the default named parameters used by the URL generator.
//         *
//         * @param array $defaults
//         * @return void
//         * @static
//         */
//        public static function defaults($defaults)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            $instance->defaults($defaults);
//        }
//
//        /**
//         * Get the default named parameters used by the URL generator.
//         *
//         * @return array
//         * @static
//         */
//        public static function getDefaultParameters()
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->getDefaultParameters();
//        }
//
//        /**
//         * Force the scheme for URLs.
//         *
//         * @param string $scheme
//         * @return void
//         * @static
//         */
//        public static function forceScheme($scheme)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            $instance->forceScheme($scheme);
//        }
//
//        /**
//         * Set the forced root URL.
//         *
//         * @param string $root
//         * @return void
//         * @static
//         */
//        public static function forceRootUrl($root)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            $instance->forceRootUrl($root);
//        }
//
//        /**
//         * Set a callback to be used to format the host of generated URLs.
//         *
//         * @param \Closure $callback
//         * @return \Illuminate\Routing\UrlGenerator
//         * @static
//         */
//        public static function formatHostUsing($callback)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->formatHostUsing($callback);
//        }
//
//        /**
//         * Set a callback to be used to format the path of generated URLs.
//         *
//         * @param \Closure $callback
//         * @return \Illuminate\Routing\UrlGenerator
//         * @static
//         */
//        public static function formatPathUsing($callback)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->formatPathUsing($callback);
//        }
//
//        /**
//         * Get the path formatter being used by the URL generator.
//         *
//         * @return \Closure
//         * @static
//         */
//        public static function pathFormatter()
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->pathFormatter();
//        }
//
//        /**
//         * Get the request instance.
//         *
//         * @return \Illuminate\Http\Request
//         * @static
//         */
//        public static function getRequest()
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->getRequest();
//        }
//
//        /**
//         * Set the current request instance.
//         *
//         * @param \Illuminate\Http\Request $request
//         * @return void
//         * @static
//         */
//        public static function setRequest($request)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            $instance->setRequest($request);
//        }
//
//        /**
//         * Set the route collection.
//         *
//         * @param \Illuminate\Routing\RouteCollection $routes
//         * @return \Illuminate\Routing\UrlGenerator
//         * @static
//         */
//        public static function setRoutes($routes)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->setRoutes($routes);
//        }
//
//        /**
//         * Set the session resolver for the generator.
//         *
//         * @param callable $sessionResolver
//         * @return \Illuminate\Routing\UrlGenerator
//         * @static
//         */
//        public static function setSessionResolver($sessionResolver)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->setSessionResolver($sessionResolver);
//        }
//
//        /**
//         * Set the encryption key resolver.
//         *
//         * @param callable $keyResolver
//         * @return \Illuminate\Routing\UrlGenerator
//         * @static
//         */
//        public static function setKeyResolver($keyResolver)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->setKeyResolver($keyResolver);
//        }
//
//        /**
//         * Set the root controller namespace.
//         *
//         * @param string $rootNamespace
//         * @return \Illuminate\Routing\UrlGenerator
//         * @static
//         */
//        public static function setRootControllerNamespace($rootNamespace)
//        {
//            /** @var \Illuminate\Routing\UrlGenerator $instance */
//            return $instance->setRootControllerNamespace($rootNamespace);
//        }
//
//        /**
//         * Register a custom macro.
//         *
//         * @param string $name
//         * @param object|callable $macro
//         * @return void
//         * @static
//         */
//        public static function macro($name, $macro)
//        {
//            \Illuminate\Routing\UrlGenerator::macro($name, $macro);
//        }
//
//        /**
//         * Mix another object into the class.
//         *
//         * @param object $mixin
//         * @param bool $replace
//         * @return void
//         * @throws \ReflectionException
//         * @static
//         */
//        public static function mixin($mixin, $replace = true)
//        {
//            \Illuminate\Routing\UrlGenerator::mixin($mixin, $replace);
//        }
//
//        /**
//         * Checks if macro is registered.
//         *
//         * @param string $name
//         * @return bool
//         * @static
//         */
//        public static function hasMacro($name)
//        {
//            return \Illuminate\Routing\UrlGenerator::hasMacro($name);
//        }
//
//    }
}

namespace {

    class Auth extends \Illuminate\Support\Facades\Auth {}

    class Setting extends \Edumad\Setting\Facades\SettingFacades {}

    class File extends \Illuminate\Support\Facades\File {}
}
