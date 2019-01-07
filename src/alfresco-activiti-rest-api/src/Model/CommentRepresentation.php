<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 15/09/2018
 * Time: 17:55
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class CommentRepresentation extends Model
{
    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var LightUserRepresentation
     */
    public $createdBy;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    protected static $constructProperties = [
        'created' => 'Date',
        'createdBy' => LightUserRepresentation::class,
        'id' => 'Integer',
        'message' => 'String'
    ];
}