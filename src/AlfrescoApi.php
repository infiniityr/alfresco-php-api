<?php
/**
 * Nom du fichier : AlfrescoApi.php
 * Projet : alfresco-php-api
 * Date : 19/06/2018
 */

namespace AlfPHPApi;


class AlfrescoApi
{
    /**
     * Configuration de l'api
     * @var array
     */
    public $config = [
        'hostEcm' => 'http://127.0.0.1:8080',
        'hostBpm' => 'http://127.0.0.1:9999',
        'oauth2' => [],
        'contextRoot' => 'alfresco',
        'contextRootBpm' => 'activiti-app',
        'provider' => 'ECM',
        'ticketEcm' => null,
        'ticketBpm' => null,
        'accessToken' => null,
        'disableCsrf' => false
    ];

    /**
     * @var
     */
    public $ecmPrivateClient;

    /**
     * @var
     */
    public $ecmClient;

    /**
     * @var
     */
    public $searchClient;

    /**
     * @var
     */
    public $discoveryClient;

    /**
     * @var
     */
    public $gsClient;

    /**
     * @var
     */
    public $bpmClient;

    /**
     * @var
     */
    public $oauth2Auth;

    /**
     * @var
     */
    public $bpmAuth;

    /**
     * @var
     */
    public $ecmAuth;

    /**
     * @var
     */
    public $activiti;

    /**
     * @var
     */
    public $core;

    /**
     * @var
     */
    public $corePrivateStore;

    /**
     * @var
     */
    public $search;

    /**
     * @var
     */
    public $discovery;

    /**
     * @var
     */
    public $gsCore;

    /**
     * @var
     */
    public $gsClassification;


    /**
     * AlfrescoApi constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge($config, $this->config);
    }
}