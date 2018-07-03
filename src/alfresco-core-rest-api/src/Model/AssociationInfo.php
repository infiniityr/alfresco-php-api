<?php
/**
 * Nom du fichier : AssociationInfo.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class AssociationInfo extends Model
{
    /**
     * @var string
     */
    public $assocType;

    protected static $constructProperties = [
        'assocType' => 'String'
    ];

    /**
     * AssociationInfo constructor.
     * @param string $assocType
     */
    public function __construct(string $assocType = null)
    {
        $this->assocType = $assocType;
    }
}