<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:18
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestDefaults extends Model
{
    /**
     * @var string[]
     */
    public $textAttributes;

    /**
     * @var string
     */
    public $defaultFTSOperator = DefaultFTSOperatorEnum::AND;

    /**
     * @var string
     */
    public $defaultFTSFieldOperator = DefaultFTSFieldOperatorEnum::AND;

    /**
     * @var string
     */
    public $namespace = "cm";

    /**
     * @var string
     */
    public $defaultFieldName = "TEXT";

    protected static $constructProperties = [
        'textAttributes' => ['String'],
        'defaultFTSOperator' => 'String',
        'defaultFTSFieldOperator' => 'String',
        'namespace' => 'String',
        'defaultFieldName' => 'String'
    ];

    /**
     * RequestDefaults constructor.
     *
     * @param string[] $textAttributes
     * @param string   $defaultFTSOperator
     * @param string   $defaultFTSFieldOperator
     * @param string   $namespace
     * @param string   $defaultFieldName
     */
    public function __construct(array $textAttributes = null, string $defaultFTSOperator = null, string $defaultFTSFieldOperator = null, string $namespace = null, string $defaultFieldName = null)
    {
        $this->textAttributes = $textAttributes;
        $this->defaultFTSOperator = $defaultFTSOperator;
        $this->defaultFTSFieldOperator = $defaultFTSFieldOperator;
        $this->namespace = $namespace;
        $this->defaultFieldName = $defaultFieldName;}
}

class DefaultFTSOperatorEnum {
    /**
     * @var string
     */
    const AND = "AND";

    /**
     * @var string
     */
    const OR = "OR";
}

class DefaultFTSFieldOperatorEnum {
    /**
     * @var string
     */
    const AND = "AND";

    /**
     * @var string
     */
    const OR = "OR";
}