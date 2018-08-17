<?php

namespace AlfPHPApi;


use Evenement\EventEmitter;

class BpmAuth extends AlfrescoApiClient
{
    /**
     * @var string username
     */
    protected $username;

    /**
     * @var string ticket
     */
    protected $ticket;

    /**
     * BpmAuth constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = []) {
        parent::__construct();
        $this->username= $this->loadUsername();
        $this->config = $config;
        $this->basePath = $config['hostBpm'] . '/' . $config['contextRootBpm'];

        $this->authentications = [
            'basicAuth' => [
                'type' => 'activiti',
                'ticket' => ''
            ]
        ];
        if (!empty($config['ticketBpm'])) {
            $this->setTicket($config['ticketBpm']);
        }
    }

    public function changeHost() {
        $this->basePath = $this->config['hostBpm'] . '/' . $this->config['contextRootBpm'];
        $this->ticket = null;
    }

    public function changeCsrfConfig(bool $disableCsrf) {
        $this->config['disableCsrf'] = $disableCsrf;
    }

    public function loadUsername() {
        if (!empty(Session::getInstance()->ACS_USERNAME)) {
            return Session::getInstance()->ACS_USERNAME;
        }
        return '';
    }

    public function saveUsername($username) {
        Session::getInstance()->ACS_USERNAME = $username;
    }

    public function setTicket(string $ticket) {
        $this->authentications['basicAuth']['ticket'] = $ticket;
        $this->authentications['basicAuth']['password'] = null;
        $this->ticket = $ticket;
    }

    public function getTicket() {
        return $this->ticket;
    }

    public function isLoggedIn() {
        return empty($this->ticket);
    }

    public function getAuthentication() {
        return $this->authentications;
    }

    public function login(string $username, string $password) {
        $this->username = $username;
        $this->authentications['basicAuth']['username'] = $username;
        $this->authentications['basicAuth']['password'] = $password;

        $postBody = $authNames = $pathParams = $queryParams = [];

        $headerParams = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Cache-Control' => 'no-cache'
        ];
        $formParams = [
            'j_username' => $this->authentications['basicAuth']['username'],
            'j_password' => $this->authentications['basicAuth']['password'],
            '_spring_security_remember_me' => true,
            'submit' => 'Login'
        ];
        $contentTypes = ['application/x-www-form-urlencoded'];
        $accepts = ['application/json'];
        return $this->callApi('/app/authentication', 'POST', $pathParams, $queryParams, $headerParams, $formParams, $postBody, $authNames, $contentTypes, $accepts, null)
            ->then(function($data) {
                $this->saveUsername($this->username);
                $ticket = 'Basic ' . base64_encode($this->authentications['basicAuth']['username'] . ':' . $this->authentications['basicAuth']['password']);
                $this->setTicket($ticket);
                return $ticket;
            }, function($error) {
                $this->saveUsername('');
                throw $error;
            });
    }

    public function logout() {
        $this->username = '';
        $this->saveUsername('');

        $postBody = $authNames = $pathParams = $queryParams = $headerParams = $formParams = [];

        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        return $this->callApi('/app/logout', 'GET', $pathParams, $queryParams, $headerParams, $formParams, $postBody, $authNames, $contentTypes, $accepts, null)
            ->then(function($data) {
                $this->setTicket(null);
                return 'logout';
            }, function($error) {
                throw $error;
            });
    }
}