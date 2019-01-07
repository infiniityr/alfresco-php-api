<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 12/09/2018
 * Time: 15:59
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ArrayNode extends Model
{
    /**
     * @var bool
     */
    public $array;

    /**
     * @var bool
     */
    public $bigDecimal;

    /**
     * @var bool
     */
    public $bigInteger;

    /**
     * @var bool
     */
    public $binary;

    /**
     * @var bool
     */
    public $containerNode;

    /**
     * @var bool
     */
    public $double;

    /**
     * @var bool
     */
    public $float;

    /**
     * @var bool
     */
    public $floatingPointNumber;

    /**
     * @var bool
     */
    public $int;

    /**
     * @var bool
     */
    public $integralNumber;

    /**
     * @var bool
     */
    public $long;

    /**
     * @var bool
     */
    public $missingNode;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var bool
     */
    public $null;

    /**
     * @var bool
     */
    public $number;

    /**
     * @var bool
     */
    public $object;

    /**
     * @var bool
     */
    public $pojo;

    /**
     * @var bool
     */
    public $short;

    /**
     * @var bool
     */
    public $textual;

    /**
     * @var bool
     */
    public $valueNode;

    protected static $constructProperties = [
        'nodeType' => 'String',
        'array' => 'Boolean',
        'bigDecimal' => 'Boolean',
        'bigInteger' => 'Boolean',
        'binary' => 'Boolean',
        'boolean' => 'Boolean',
        'containerNode' => 'Boolean',
        'double' => 'Boolean',
        'float' => 'Boolean',
        'floatingPointNumber' => 'Boolean',
        'int' => 'Boolean',
        'integralNumber' => 'Boolean',
        'long' => 'Boolean',
        'missingNode' => 'Boolean',
        'null' => 'Boolean',
        'number' => 'Boolean',
        'object' => 'Boolean',
        'pojo' => 'Boolean',
        'short' => 'Boolean',
        'textual' => 'Boolean',
        'valueNode' => 'Boolean'
    ];
}


class NodeTypeEnum {
    const ARRAY = "ARRAY";

    const BINARY = "BINARY";

    const BOOLEAN = "BOOLEAN";

    const MISSING = "MISSING";

    const NULL = "NULL";

    const NUMBER = "NUMBER";

    const OBJECT = "OBJECT";

    const POJO = "POJO";

    const STRING = "STRING";
}