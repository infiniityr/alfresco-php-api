<?php
/**
 * Nom du fichier : Model.phpalfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class Model implements \JsonSerializable
{
    protected static $constructProperties;

    /**
     * Constructs an Object from an array, optionally creating a new instance.
     * Copies all relevant properties from <code>$data</code> to <code>$obj</code> if supplied or a new instance if not.
     *
     * @param array $data
     * @param static|null $obj
     * @return static|null
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

    public function jsonSerialize()
    {
        $arrayObj = [];
        foreach (static::$constructProperties as $property => $type) {
            if (!empty($this->$property)) {
                $arrayObj[$property] = $this->$property;
            }
        }
        return $arrayObj;
    }
}