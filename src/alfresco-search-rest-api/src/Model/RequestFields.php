<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:40
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RequestFields extends Model
{
    /**
     * @var string[]
     */
    public $fields;

    protected static $constructProperties = [
        'fields' => ['String']
    ];

    /**
     * RequestFields constructor.
     *
     * @param string[] $fields
     */
    public function __construct($fields = null) { $this->fields = $fields;}

    public static function constructFromArray(array $data, $obj = null)
    {
        $obj = $obj ?: new static();
        $obj->fields = ApiClient::convertToType($data, static::$constructProperties['fields']);
        return $obj;
    }

    public function jsonSerialize()
    {
        return $this->fields;
    }
}