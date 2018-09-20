<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 22:51
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class LightTenantRepresentation extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    protected static $constructProperties = [
        'id' => 'Integer',
        'name' => 'String'
    ];
}