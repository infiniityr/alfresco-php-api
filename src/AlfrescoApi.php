<?php
/**
 * Nom du fichier : AlfrescoApi.php
 * Projet : alfresco-php-api
 * Date : 19/06/2018
 */

namespace AlfPHPApi;

use AlfPHPApi\AlfrescoActivitiRestApi\AlfrescoActivitiRestApi;
use AlfPHPApi\AlfrescoCoreRestApi\AlfrescoCoreRestApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\WebscriptApi;
use AlfPHPApi\AlfrescoDiscoveryRestApi\AlfrescoDiscoveryRestApi;
use AlfPHPApi\AlfrescoGsClassificationRestApi\AlfrescoGsClassificationRestApi;
use AlfPHPApi\AlfrescoGsCoreRestApi\AlfrescoGsCoreRestApi;
use AlfPHPApi\AlfrescoSearchRestApi\AlfrescoSearchRestApi;
use GuzzleHttp\Exception\RequestException;
use function GuzzleHttp\Promise\all;

/**
 * Class AlfrescoApi
 * @package AlfPHPApi
 *
 * AUTH
 * @property-read Oauth2Auth $oauthAuth
 * @property-read EcmAuth $ecmAuth
 * @property-read BpmAuth $bpmAuth
 *
 * CLIENT
 * @property-read EcmClient $ecmPrivateClient
 * @property-read EcmClient $ecmClient
 * @property-read EcmClient $searchClient
 * @property-read EcmClient $discoveryClient
 * @property-read EcmClient $gsClient
 * @property-read BpmClient $bpmClient
 *
 * STORE
 * @property-read AlfrescoActivitiRestApi $activiti
 * @property-read AlfrescoCoreRestApi $core
 * @property-read AlfrescoSearchRestApi $search
 * @property-read AlfrescoDiscoveryRestApi $discovery
 * @property-read AlfrescoGsCoreRestApi $gsCore
 * @property-read AlfrescoGsClassificationRestApi $gsClassification
 * @property-read AlfrescoNode $nodes
 * @property-read AlfrescoNode $node
 * @property-read AlfrescoContent $content
 * @property-read AlfrescoUpload $upload
 * @property-read WebscriptApi $webScript
 *
 */
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
     * @var EcmClient[]|BpmClient[]
     */
    public $clients = [];

    /**
     * @var array
     */
    public $stores = [];

    /**
     * @var Oauth2Auth[]|EcmAuth[]|BpmAuth[]
     */
    public $auths = [];

    /**
     * AlfrescoApi constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge($this->config, $config);

        $this->clients = [
            'ecmPrivateClient' => new EcmClient($this->config, '/api/-default-/private/alfresco/versions/1'),
            'ecmClient' => new EcmClient($this->config, '/api/-default-/public/alfresco/versions/1'),
            'searchClient' => new EcmClient($this->config, '/api/-default-/public/search/versions/1'),
            'discoveryClient' => new EcmClient($this->config, '/api'),
            'gsClient' => new EcmClient($this->config, '/api/-default-/public/gs/versions/1'),
            'bpmClient' => new BpmClient($this->config)
        ];

        if ($this->config['provider'] === "OAUTH") {
            $this->auths['oauthAuth'] = new Oauth2Auth($this->config);
            $this->setAuthenticationClientECMBPM($this->oauthAuth->getAuthentication(), $this->oauthAuth->getAuthentication());
        } else {
            $this->auths['bpmAuth'] = new BpmAuth($this->config);
            $this->auths['ecmAuth'] = new EcmAuth($this->config);
            $this->setAuthenticationClientECMBPM($this->ecmAuth->getAuthentication(), $this->bpmAuth->getAuthentication());
        }

        $this->initObjects();
    }

    public function getClient(string $name) {
        return isset($this->clients[$name])?$this->clients[$name]:null;
    }

    public function getStore(string $name) {
        return isset($this->stores[$name])?$this->stores[$name]:null;
    }

    public function getAuth(string $name) {
        return isset($this->auths[$name])?$this->auths[$name]:null;
    }

    public function __get($name)
    {
        if ($this->getStore($name) !== null) {
            return $this->getStore($name);
        }
        if ($this->getClient($name) !== null) {
            return $this->getClient($name);
        }
        if ($this->getAuth($name) !== null) {
            return $this->getAuth($name);
        }
        return null;
    }

    /**
     * @param array $authECM
     * @param array $authBPM
     */
    public function setAuthenticationClientECMBPM($authECM, $authBPM) {
        foreach ($this->clients as $client) {
            if ($client instanceof EcmClient) {
                $client->setAuthentications($authECM);
            } elseif ($client instanceof BpmClient) {
                $client->setAuthentications($authBPM);
            }
        }
    }

    public function initObjects() {
        $this->stores['activiti'] = new AlfrescoActivitiRestApi($this->bpmClient);
        $this->stores['core'] = new AlfrescoCoreRestApi($this->ecmClient);
        $this->stores['search'] = new AlfrescoSearchRestApi($this->searchClient);
        $this->stores['discovery'] = new AlfrescoDiscoveryRestApi($this->discoveryClient);
        $this->stores['gsCore'] = new AlfrescoGsCoreRestApi($this->gsClient);
        $this->stores['gsClassification'] = new AlfrescoGsClassificationRestApi($this->gsClient);
        $this->stores['nodes'] = $this->stores['node'] = new AlfrescoNode();
        $this->stores['content'] = new AlfrescoContent($this->ecmAuth, $this->ecmClient);
        $this->stores['upload'] = new AlfrescoUpload();
        $this->stores['webScript'] = $this->core->webScript;
    }

    public function changeCsrfConfig(bool $disableCsrf) {
        $this->config['disableCsrf'] = $disableCsrf;
        $this->bpmAuth->changeCsrfConfig($disableCsrf);
    }

    public function changeEcmHost(string $hostEcm) {
        $this->config['hostEcm'] = $hostEcm;
        $this->ecmAuth->changeHost();
        $this->ecmClient->changeHost();
    }

    public function changeBpmHost(string $hostBpm) {
        $this->config['hostBpm'] = $hostBpm;
        $this->bpmAuth->changeHost();
        $this->bpmClient->changeHost();
    }

    public function login($username, $password) {
        $username = trim($username);
        if ($this->isBpmConfiguration()) {
            return $this->bpmAuth->login($username, $password)
                ->then(function($ticketBpm) {
                    $this->config['ticketBpm'] = $ticketBpm;
                    $this->bpmClient->setAuthentications($this->bpmAuth->getAuthentication());
                }, function(RequestException $exception) { throw $exception; });
        } elseif ($this->isEcmConfiguration()) {
            return $this->ecmAuth->login($username, $password)
                ->then(function($ticketEcm) {
                    $this->config['ticketEcm'] = $ticketEcm;
                    $this->ecmClient->setAuthentications($this->ecmAuth->getAuthentication());
                }, function(RequestException $exception) { throw $exception; });
        } elseif ($this->isEcmBpmConfiguration()) {
            return $this->loginBpmEcm($username, $password)
                ->then(function($tickets) {
                    $this->config['ticketEcm'] = $tickets[0];
                    $this->config['ticketBpm'] = $tickets[1];
                    $this->setAuthenticationClientECMBPM($this->ecmAuth->getAuthentication(), $this->bpmAuth->getAuthentication());
                }, function(RequestException $exception) { throw $exception; });
        } elseif ($this->isOauthConfiguration()) {
            return $this->oauthAuth->login($username, $password)
                ->then(function($accessToken) {
                    $this->config['accessToken'] = $accessToken;
                    $this->setAuthenticationClientECMBPM($this->oauthAuth->getAuthentication(), $this->oauthAuth->getAuthentication());
                }, function(RequestException $exception) { throw $exception; });
        }
    }

    public function loginTicket($ticketEcm, $ticketBpm) {
        $this->config['ticketEcm'] = $ticketEcm;
        $this->config['ticketBpm'] = $ticketBpm;
        return $this->ecmAuth->validateTicket();
    }

    public function logout() {
        if ($this->isBpmConfiguration()) {
            return $this->bpmAuth->logout();
        } elseif ($this->isEcmConfiguration()) {
            return $this->ecmAuth->logout()
                ->then(function($datas) {$this->config['ticket'] = null;},
                    function(RequestException $exception) { throw $exception; });
        } elseif ($this->isEcmBpmConfiguration()) {
            return $this->logoutBpmEcm();
        }
    }

    public function isLoggedIn() {
        if ($this->isBpmConfiguration()) {
            return $this->bpmAuth->isLoggedIn();
        } elseif ($this->isEcmConfiguration()) {
            return $this->ecmAuth->isLoggedIn();
        } elseif ($this->isEcmBpmConfiguration()) {
            return $this->ecmAuth->isLoggedIn() and $this->bpmAuth->isLoggedIn();
        } elseif ($this->isOauthConfiguration()) {
            return $this->oauthAuth->isLoggedIn();
        }
        return false;
    }

    public function refreshToken() {
        if (!$this->isOauthConfiguration()) {
            throw new \Exception("Missing the required oauth2 configuration");
        }
        return $this->oauthAuth->refreshToken();
    }

    public function setTicket($ticketEcm, $ticketBpm) {
        if (!empty($this->ecmAuth)) {
            $this->ecmAuth->setTicket($ticketEcm);
        }
        if (!empty($this->bpmAuth)) {
            $this->bpmAuth->setTicket($ticketBpm);
        }
    }

    public function invalidateSession() {
        if (!empty($this->oauthAuth)) {
            $this->oauthAuth->setToken(null, null);
        } else {
            $this->ecmAuth->setTicket(null);
            $this->bpmAuth->setTicket(null);
        }
    }

    public function getTicketAuth() {
        return !empty($this->oauthAuth)?$this->oauthAuth->getToken():null;
    }

    public function getTicketEcm() {
        return !empty($this->ecmAuth)?$this->ecmAuth->getTicket():null;
    }

    public function getTicketBpm() {
        return !empty($this->bpmAuth)?$this->bpmAuth->getTicket():null;
    }


    private function loginBpmEcm($username, $password) {
        $ecmPromise = $this->ecmAuth->login($username, $password);
        $bpmPromise = $this->bpmAuth->login($username, $password);
        return all([$ecmPromise, $bpmPromise]);
    }

    private function logoutBpmEcm() {
        $ecmPromise = $this->ecmAuth->logout();
        $bpmPromise = $this->bpmAuth->logout();

        return all([$ecmPromise, $bpmPromise])
            ->then(function ($datas) {
                $this->config['ticket'] = null;
                return 'logout';
            }, function(RequestException $exception) { throw $exception; });
    }

    private function isBpmConfiguration() {
        return !empty($this->config['provider']) and strtoupper($this->config['provider']) === "BPM";
    }

    private function isEcmConfiguration() {
        return !empty($this->config['provider']) and strtoupper($this->config['provider']) === "ECM";
    }

    private function isOauthConfiguration() {
        return !empty($this->config['provider']) and strtoupper($this->config['provider']) === "OAUTH";
    }

    private function isEcmBpmConfiguration() {
        return !empty($this->config['provider']) and strtoupper($this->config['provider']) === "ALL";
    }
}