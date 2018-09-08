<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 23:09
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class RequestTemplates extends Model
{
    /**
     * @var RequestTemplatesInner[]
     */
    public $templates;

    protected static $constructProperties = [
        'templates' => [RequestTemplatesInner::class]
    ];

    /**
     * RequestTemplates constructor.
     *
     * @param RequestTemplatesInner[] $templates
     */
    public function __construct(array $templates = null) { $this->templates = $templates; }

    public static function constructFromArray(array $data, $obj = null)
    {
        $obj = $obj ?: new static();
        $obj->templates = ApiClient::convertToType($data, static::$constructProperties['templates']);
        return $obj;
    }

    public function jsonSerialize()
    {
        return $this->templates;
    }
}