<?php
/**
 * Nom du fichier : ChildAssociationInfo.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class ChildAssociationInfo extends Model
{
    /**
     * @var string
     */
    public $assocType;

    /**
     * @var bool
     */
    public $isPrimary;

    protected static $constructProperties = [
        'assocType' => 'String',
        'isPrimary' => 'Boolean'
    ];

    /**
     * ChildAssociationInfo constructor.
     * @param string $assocType
     * @param bool $isPrimary
     */
    public function __construct(string $assocType = null, bool $isPrimary = false)
    {
        $this->assocType = $assocType;
        $this->isPrimary = $isPrimary;
    }
}