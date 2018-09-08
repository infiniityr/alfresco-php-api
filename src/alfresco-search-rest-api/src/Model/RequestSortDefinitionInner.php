<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:39
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestSortDefinitionInner extends Model
{
    /**
     * @var string
     */
    public $type = TypeEnum::FIELD;

    /**
     * @var string
     */
    public $field;

    /**
     * @var bool
     */
    public $ascending = false;

    protected static $constructProperties = [
        'type' => 'String',
        'field' => 'String',
        'ascending' => 'Boolean'
    ];

    /**
     * RequestSortDefinitionInner constructor.
     *
     * @param string $type
     * @param string $field
     * @param bool   $ascending
     */
    public function __construct(string $type = TypeEnum::FIELD, string $field = null, bool $ascending = false)
    {
        $this->type = $type;
        $this->field = $field;
        $this->ascending = $ascending;}
}

class TypeEnum {
    const FIELD = "FIELD";

    const DOCUMENT = "DOCUMENT";

    const SCORE = "SCORE";
}