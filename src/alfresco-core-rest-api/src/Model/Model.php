<?php
/**
 * Nom du fichier : Model.phpalfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class Model implements \JsonSerializable
{
    /**
     * @var array
     */
    protected static $constructProperties;

    /**
     * Constructs an Object from an array, optionally creating a new instance.
     * Copies all relevant properties from <code>$data</code> to <code>$obj</code> if supplied or a new instance if not.
     *
     * @param array $data
     * @param static|null $obj
     * @return Model|null
     */
    public static function constructFromArray(array $data, $obj = null) {
        if (!empty($data)) {
            $obj = $obj?:new static();
            foreach (static::$constructProperties as $property => $type) {
                if (array_key_exists($property, $data)) {
                    $obj->$property = ApiClient::convertToType($data[$property], $type);
                }
            }
        }
        return $obj;
    }

    /**
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @param bool $recursive
     *
     * @return array
     */
    public function toArray($recursive = false)
    {
        $arrayObj = [];
        foreach (static::$constructProperties as $property => $type) {
            if (!empty($this->$property)) {
                if ($type === "Date") {
                    $arrayObj[$property] = $this->$property->format(\DateTime::ISO8601);
                } else if ($recursive) {
                    if (is_object($this->$property) and method_exists($this->$property, "toArray")) {
                        $arrayObj[$property] = $this->$property->toArray($recursive);
                    } else if (is_array($this->$property)) {
                        $arrayObj[$property] = json_decode(json_encode($this->$property), true);
                    } else {
                        $arrayObj[$property] = $this->$property;
                    }
                } else {
                    $arrayObj[$property] = $this->$property;
                }
            }
        }
        return $arrayObj;
    }

    /**
     * @return array
     */
    public static function getConstructProperties() {
        return static::$constructProperties;
    }
}