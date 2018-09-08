<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 23:08
 */

namespace AlfPHPApi;


use AlfPHPApi\AlfrescoCoreRestApi\Api\SiteApi;
use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

abstract class BaseListApi
{
    public static $toLoad = [];

    public static $instances = [];

    protected static $methods = [];

    public function __construct(ApiClient $client) {
        static::instantiateObjects($client);
    }

    public static function instantiateObjects(ApiClient $client) {
        foreach (static::$toLoad as $class) {
            $classReflexion = new \ReflectionClass($class);
            static::$instances[lcfirst($classReflexion->getShortName())] = new $class($client);
        }
    }

    public function __call($name, $arguments) {
        foreach (static::$instances as $instance) {
            if (method_exists($instance, $name)) {
                return $instance->$name(...$arguments);
            }
        }
        throw new \BadMethodCallException("The method $name doesn't exists in API classes from " . static::class);
    }

    public function __get($name)
    {
        if (array_key_exists($name, static::$instances)) {
            return static::$instances[$name];
        }
        if (array_key_exists($name . 'Api', static::$instances)) {
            return static::$instances[$name . 'Api'];
        }
        return null;
    }
}