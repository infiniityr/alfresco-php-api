<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 12/09/2018
 * Time: 16:28
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class Chart extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $type;

    protected static $constructProperties = [
        'id' => 'String',
        'type' => 'String'
    ];
}