<?php
/**
 * Nom du fichier : EmailSharedLinkBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class EmailSharedLinkBody extends Model
{
    /**
     * @var string
     */
    public $client;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string[]
     */
    public $recipientEmails;

    protected static $constructProperties = [
        'client' => 'String',
        'message' => 'String',
        'locale' => 'String',
        'recipientEmails' => ['String']
    ];
}