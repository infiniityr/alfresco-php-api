<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 23:24
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class OptionRepresentation extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    protected static $constructProperties = [
        'id' => 'String',
        'name' => 'String'
    ];
}