<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 22:54
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RequestSortDefinition extends Model
{
    /**
     * @var RequestSortDefinitionInner[]
     */
    public $sorts;

    protected static $constructProperties = [
        'sorts' => [RequestSortDefinitionInner::class]
    ];

    /**
     * RequestSortDefinition constructor.
     *
     * @param RequestSortDefinitionInner[] $sorts
     */
    public function __construct(array $sorts = null) { $this->sorts = $sorts; }

    public static function constructFromArray(array $data, $obj = null)
    {
        $obj = $obj ?: new static();
        $obj->sorts = ApiClient::convertToType($data, static::$constructProperties['sorts']);
        return $obj;
    }

    public function jsonSerialize()
    {
        return $this->sorts;
    }
}