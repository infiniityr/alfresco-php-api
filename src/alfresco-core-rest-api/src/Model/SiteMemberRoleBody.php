<?php
/**
 * Nom du fichier : SiteMemberRoleBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteMemberRoleBody extends Model
{
    /**
     * @var string
     */
    public $role;

    const SITECONSUMER = "SiteConsumer";

    const SITECOLLABORATOR = "SiteCollaborator";

    const SITECONTRIBUTOR = "SiteContributor";

    const SITEMANAGER = "SiteManager";

    protected static $constructProperties = [
        'role' => 'String'
    ];
}