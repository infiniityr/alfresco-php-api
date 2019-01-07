<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:47
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RequestHighlightFields extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var int
     */
    public $snippetCount;

    /**
     * @var int
     */
    public $fragmentSize;

    /**
     * @var bool
     */
    public $mergeContiguous;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $postfix;

    protected static $constructProperties = [
        'field' => 'String',
        'snippetCount' => 'Integer',
        'fragmentSize' => 'Integer',
        'mergeContiguous' => 'Boolean',
        'prefix' => 'string',
        'postfix' => 'string'
    ];
}