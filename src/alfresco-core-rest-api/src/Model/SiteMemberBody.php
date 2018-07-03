<?php
/**
 * Nom du fichier : SiteMemberBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteMemberBody extends Model
{
    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $id;

    const SITECONSUMER = "SiteConsumer";

    const SITECOLLABORATOR = "SiteCollaborator";

    const SITECONTRIBUTOR = "SiteContributor";

    const SITEMANAGER = "SiteManager";

    protected static $constructProperties = [
        'role' => 'String',
        'id' => 'String'
    ];
}