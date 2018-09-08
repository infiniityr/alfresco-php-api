<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:15
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class PathInfo extends Model
{
    /**
     * @var PathElement[]
     */
    public $elements;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $isComplete;

    protected static $constructProperties = [
        'elements' => [PathElement::class],
        'name' => 'String',
        'isComplete' => 'Boolean'
    ];
}