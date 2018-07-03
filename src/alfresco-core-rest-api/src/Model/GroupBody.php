<?php
/**
 * Nom du fichier : GroupBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class GroupBody extends Model
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
     * @var string[]
     */
    public $parentIds;

    protected static $constructProperties = [
        'id' => 'String',
        'displayName' => 'String',
        'parentIds' => ['String']
    ];

    /**
     * GroupBody constructor.
     * @param bool $isRoot
     * @param string $id
     * @param string $displayName
     */
    public function __construct(bool $isRoot = false,string $displayName = null, string $id = null)
    {
        $this->id = $id;
        $this->displayName = $displayName;
    }
}