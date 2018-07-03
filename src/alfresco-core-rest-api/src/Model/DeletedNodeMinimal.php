<?php
/**
 * Nom du fichier : DeletedNodeMinimal.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class DeletedNodeMinimal extends NodeMinimal
{
    /**
     * @var UserInfo
     */
    public $archivedByUser;

    /**
     * @var \DateTime
     */
    public $archivedAt;

    /**
     * DeletedNodeMinimal constructor.
     * @param UserInfo $archivedByUser
     * @param \DateTime $archivedAt
     */
    public function __construct(UserInfo $archivedByUser = null, \DateTime $archivedAt = null)
    {
        parent::__construct();
        $this->archivedByUser = $archivedByUser;
        $this->archivedAt = $archivedAt;
        static::$constructProperties = array_merge(parent::$constructProperties, [
            'archivedByUser' => UserInfo::class,
            'archivedAt' => 'Date'
        ]);
    }
}