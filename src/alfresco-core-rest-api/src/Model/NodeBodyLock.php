<?php
/**
 * Nom du fichier : NodeBodyLock.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeBodyLock extends Model
{
    /**
     * @var float
     */
    public $timeToExpire;

    /**
     * @var string
     */
    public $type = self::ALLOW_OWNER_CHANGES;

    /**
     * @var string
     */
    public $lifetime = self::PERSISTENT;

    const ALLOW_OWNER_CHANGES = "ALLOW_OWNER_CHANGES";

    const FULL = "FULL";

    const PERSISTENT = "PERSISTENT";

    const EPHEMERAL = "EPHEMERAL";

    protected static $constructProperties = [
        'timeToExpire' => 'Number',
        'type' => 'String',
        'lifetime' => 'String'
    ];
}