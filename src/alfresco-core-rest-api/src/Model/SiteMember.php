<?php
/**
 * Nom du fichier : SiteMember.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteMember extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var Person
     */
    public $person;

    /**
     * @var string
     */
    public $role;

    const SITECONSUMER = "SiteConsumer";

    const SITECOLLABORATOR = "SiteCollaborator";

    const SITECONTRIBUTOR = "SiteContributor";

    const SITEMANAGER = "SiteManager";

    protected static $constructProperties = [
        'id' => 'String',
        'role' => 'String',
        'person' => Person::class
    ];

    /**
     * SiteMember constructor.
     * @param string $id
     * @param Person $person
     * @param string $role
     */
    public function __construct(string $id = null, Person $person = null, string $role = null)
    {
        $this->id = $id;
        $this->person = $person;
        $this->role = $role;
    }

}