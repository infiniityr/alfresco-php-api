<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 22:44
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class LayoutRepresentation extends Model
{
    /**
     * @var int
     */
    public $colspan;

    /**
     * @var int
     */
    public $column;

    /**
     * @var int
     */
    public $row;

    protected static $constructProperties = [
        'colspan' => 'Integer',
        'column' => 'Integer',
        'row' => 'Integer'
    ];
}