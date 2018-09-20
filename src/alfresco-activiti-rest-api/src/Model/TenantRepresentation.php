<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 17:58
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class TenantRepresentation extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $id;

    /**
     * @var \DateTime
     */
    public $lastUpdate;

    /**
     * @var int
     */
    public $logoId;

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
        'created' => 'Date',
        'domain' => 'String',
        'id' => 'Integer',
        'lastUpdate' => 'Date',
        'logoId' => 'Integer',
        'maxUsers' => 'Integer',
        'name' => 'String'
    ];
}