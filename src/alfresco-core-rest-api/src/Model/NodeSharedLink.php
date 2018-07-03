<?php
/**
 * Nom du fichier : NodeSharedLink.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeSharedLink extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var \DateTime
     */
    public $modifiedAt;

    /**
     * @var UserInfo
     */
    public $modifiedByUser;

    /**
     * @var UserInfo
     */
    public $sharedByUser;

    /**
     * @var ContentInfo
     */
    public $content;

    /**
     * @var string[]
     */
    public $allowableOperations;

    protected static $constructProperties = [
        'id' => 'String',
        'nodeId' => 'String',
        'name' => 'String',
        'modifiedAt' => 'Date',
        'modifiedByUser' => UserInfo::class,
        'sharedByUser' => UserInfo::class,
        'content' => ContentInfo::class,
        'allowableOperations' => ['String']
    ];
}