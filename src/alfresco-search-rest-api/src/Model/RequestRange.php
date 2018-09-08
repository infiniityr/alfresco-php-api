<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:34
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestRange extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $end;

    /**
     * @var string
     */
    public $gap;

    /**
     * @var bool
     */
    public $hardend;

    /**
     * @var string[]
     */
    public $other;

    /**
     * @var string[]
     */
    public $include;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string[]
     */
    public $excludeFilters;

    protected static $constructProperties = [
        'field' => 'String',
        'start' => 'String',
        'end' => 'String',
        'gap' => 'String',
        'hardend' => 'Boolean',
        'other' => ['String'],
        'include' => ['String'],
        'label' => 'String',
        'excludeFilters' => ['String']
    ];
}