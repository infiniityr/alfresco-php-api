<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 10:16
 */

namespace AlfPHPApi;


use AlfPHPApi\AlfrescoAuthRestApi\Api\AuthenticationApi;
use AlfPHPApi\AlfrescoAuthRestApi\Model\LoginRequest;
use AlfPHPApi\AlfrescoAuthRestApi\Model\LoginTicketEntry;
use AlfPHPApi\AlfrescoAuthRestApi\Model\ValidateTicketEntry;
use GuzzleHttp\Exception\RequestException;

class EcmAuth extends AlfrescoApiClient
{
    /**
     * @var string $username
     */
    protected $username;

    /**
     * @var string $ticket
     */
    protected $ticket;

    /**
     * EcmAuth constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = []) {
        parent::__construct();
        $this->username = $this->loadUsername();
        $this->config = $config;

        $this->basePath = $this->config['hostEcm'] . '/' . $this->config['contextRoot'] . '/api/-default-/public/authentication/versions/1';
        if (!empty($this->config['ticketEcm'])) {
            $this->setTicket($this->config['ticketEcm']);
        }
    }

    public function changeHost() {
        $this->basePath = $this->config['hostEcm'] . '/' . $this->config['contextRoot'] . '/api/-default-/public/authentication/versions/1';
        $this->ticket = null;
    }

    public function loadUsername() {
        return !empty(Session::getInstance()->APS_USERNAME) ? Session::getInstance()->APS_USERNAME : '';
    }

    public function saveUsername(string $username) {
        Session::getInstance()->APS_USERNAME = $username;
    }

    public function setTicket(string $ticket) {
        $this->authentications['basicAuth']['username'] = 'ROLE_TICKET';
        $this->authentications['basicAuth']['password'] = $ticket;
        $this->ticket = $ticket;
    }

    public function getTicket() {
        return $this->ticket;
    }

    public function isLoggedIn() {
        return !empty($this->ticket);
    }

    public function getAuthentication() {
        return $this->authentications;
    }

    public function login($username, $password) {
        $this->username = $username;
        $this->authentications['basicAuth']['username'] = $username;
        $this->authentications['basicAuth']['password'] = $password;

        $authApi = new AuthenticationApi($this);
        $loginRequest = new LoginRequest();

        $loginRequest->userId = $this->authentications['basicAuth']['username'];
        $loginRequest->password = $this->authentications['basicAuth']['password'];

        return $authApi->createTicket($loginRequest)
            ->then(function(LoginTicketEntry $data) {
                $this->saveUsername($this->username);
                $this->setTicket($data->entry->id);
                return $data->entry->id;
            }, function(RequestException $error) {
                $this->saveUsername('');
                throw $error;
            });
    }

    public function validateTicket() {
        $authApi = new AuthenticationApi($this);
        $this->setTicket($this->config['ticketEcm']);
        return $authApi->validateTicket()
            ->then(function(ValidateTicketEntry $data) {
                $this->setTicket($data->entry->id);
                return $data->entry->id;
            }, function($error) {
                throw $error;
            });
    }

    public function logout() {
        $this->username = '';
        $this->saveUsername('');
        $authApi = new AuthenticationApi($this);
        return $authApi->deleteTicket()
            ->then(function($data) {
                $this->setTicket('');
                return 'logout';
            }, function(RequestException $error) {
                throw $error;
            });
    }
}