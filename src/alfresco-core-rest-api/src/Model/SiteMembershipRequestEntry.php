<?php
/**
 * Nom du fichier : SiteMembershipRequestEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteMembershipRequestEntry extends Model
{
    /**
     * @var SiteMembershipRequest
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => SiteMembershipRequest::class
    ];

    /**
     * SiteMembershipRequestEntry constructor.
     * @param SiteMembershipRequest $entry
     */
    public function __construct(SiteMembershipRequest $entry = null)
    {
        $this->entry = $entry;
    }
}