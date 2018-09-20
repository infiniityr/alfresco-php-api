<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 15/09/2018
 * Time: 18:08
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class CreateTenantRepresentation extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $maxUsers;

    /**
     * @var string
     */
    public $name;

    protected static $constructProperties = [
        'active' => 'Boolean',
        'domain' => 'String',
        'maxUsers' => 'Integer',
        'name' => 'String'
    ];
}