<?php
/**
 * Nom du fichier : PersonNetworkEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PersonNetworkEntry extends Model
{
    /**
     * @var PersonNetwork
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => PersonNetwork::class
    ];

    /**
     * PersonNetworkEntry constructor.
     * @param PersonNetwork $entry
     */
    public function __construct(PersonNetwork $entry = null)
    {
        $this->entry = $entry;
    }
}