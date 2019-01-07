<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 25/09/2018
 * Time: 00:43
 */

namespace AlfPHPApi\Tests;

use \PHPUnit\Framework\TestCase as UnitTest;

class TestCase extends UnitTest
{
    public function fake(string $class) {

        switch ($class) {
        case 'String':
            return $this->fakeString();
            break;
        case 'Integer':
            return $this->fakeInt();
            break;
        case 'Date':
            return $this->fakeDate();
            break;
        case 'Array':
            return $this->fakeArray('String');
            break;
        default:
            if (class_exists($class)) {
                $obj = new $class();
                if (!method_exists($obj, "getConstructProperties")) {
                    throw new \InvalidArgumentException("The class $class doen't have the getConstructProperties() method");
                }

                foreach ($obj::getConstructProperties() as $property => $type) {

                    if (is_array($type)) {
                        foreach ($type as $typeIndex => $subType) {
                            if (is_string($typeIndex)) {
                                $obj->$property = $this->fakeArray($subType, 5, true);
                            } else {
                                $obj->$property = $this->fakeArray($subType, 5, false);
                            }
                        }
                    } else {
                        $obj->$property = $this->fake($type);
                    }

                }
                return $obj;
            }
        }
    }

    public function fakeString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function fakeInt(int $max = 42) {
        return rand(0, $max);
    }

    public function fakeArray($class = 'String', $length = 5, $index_as_string = false) {
        $array = [];
        for ($i = 0; $i < $length; $i++) {
            if ($index_as_string) {
                $array[$this->fakeString()] = $this->fake($class);
            } else {
                $array[$i] = $this->fake($class);
            }
        }
        return $array;
    }

    public function fakeDate() {
        $date = new \DateTime();
        $date->setDate(rand(1950, 2020), rand(1, 12), rand(1, 28));
        $date->setTime(rand(0, 23), rand(0, 59));
        return $date;
    }
}