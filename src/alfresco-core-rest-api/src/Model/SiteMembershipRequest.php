<?php
/**
 * Nom du fichier : SiteMembershipRequest.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteMembershipRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var \DateTime
     */
    public $createdAt;

    /**
     * @var Site
     */
    public $entry;

    protected static $constructProperties = [
        'id' => 'String',
        'createdAt' => 'Date',
        'entry' => Site::class
    ];

    /**
     * SiteMembershipRequest constructor.
     * @param string $id
     * @param \DateTime $createdAt
     * @param Site $entry
     */
    public function __construct(string $id = null, \DateTime $createdAt = null, Site $entry = null)
    {
        $this->id = $id;
        $this->createdAt = $createdAt;
        $this->entry = $entry;
    }
}