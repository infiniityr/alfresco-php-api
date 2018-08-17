<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 23:08
 */

namespace AlfPHPApi;


class BaseListApi
{
    public static $toLoad = [];

    public static $instances = [];

    protected static $methods = [];

    public function __construct() {
        static::instantiateObjects();
    }

    public static function instantiateObjects() {
        foreach (static::$toLoad as $class) {
            $classReflexion = new \ReflectionClass($class);
            static::$instances[lcfirst($classReflexion->getShortName())] = new $class();
        }
    }

    public function __call($name, $arguments) {
        foreach (static::$instances as $instance) {
            if (method_exists($instance, $name)) {
                $instance->$name(...$arguments);
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