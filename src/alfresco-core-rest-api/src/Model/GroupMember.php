<?php
/**
 * Nom du fichier : GroupMember.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class GroupMember extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $memberType;

    protected static $constructProperties = [
        'id' => 'String',
        'displayName' => 'String',
        'memberType' => 'String'
    ];

    /**
     * GroupMember constructor.
     * @param string $id
     * @param string $displayName
     * @param string $memberType
     */
    public function __construct(string $id = null, string $displayName = null, string $memberType = null)
    {
        $this->id = $id;
        $this->displayName = $displayName;
        $this->memberType = $memberType;
    }
}