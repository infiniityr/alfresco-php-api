<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 22:30
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ImageUploadRepresentation extends Model
{
    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $userId;

    protected static $constructProperties = [
        'created' => 'Date',
        'id' => 'Integer',
        'name' => 'String',
        'userId' => 'Integer'
    ];
}