<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 08/09/2018
 * Time: 15:06
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class AbstractGroupRepresentation extends Model
{
    /**
     * @var string
     */
    public $externalId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    protected static $constructProperties = [
        'externalId' => 'String',
        'id' => 'Integer',
        'name' => 'String',
        'status' => 'String'
    ];
}