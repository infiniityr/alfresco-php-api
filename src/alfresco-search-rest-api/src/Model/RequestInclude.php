<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:23
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RequestInclude extends Model
{
    /**
     * @var string[]
     */
    public $includes;

    protected static $constructProperties = [
        'includes' => ['String']
    ];

    /**
     * RequestInclude constructor.
     *
     * @param string[] $includes
     */
    public function __construct($includes = null) {
        $this->includes = $includes;
    }

    public static function constructFromArray(array $data, $obj = null)
    {
        $obj = $obj ?: new static();
        $obj->includes = ApiClient::convertToType($data, static::$constructProperties['includes']);
        return $obj;
    }


    public function jsonSerialize()
    {
        return $this->includes;
    }
}