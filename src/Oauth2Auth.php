<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 11:07
 */

namespace AlfPHPApi;


use function foo\func;

class Oauth2Auth extends AlfrescoApiClient
{

    /**
     * Oauth2Auth constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = []) {
        parent::__construct();
        $this->config = $config;
        if (!empty($this->config['oauth2'])) {
            if (empty($this->config['oauth2']['host'])) {
                throw new \InvalidArgumentException("Missing the required argument oauth2 host parameter");
            }
            if (empty($this->config['oauth2']['clientId'])) {
                throw new \InvalidArgumentException("Missing the required argument oauth2 clientId parameter");
            }
            if (empty($this->config['oauth2']['secret'])) {
                throw new \InvalidArgumentException("Missing the required argument oauth2 secret parameter");
            }
            $this->basePath = $this->config['oauth2']['host'];
            $this->authentications = [
                'basicAuth' => [
                    'type' => 'oauth2',
                    'accessToken' => ''
                ]
            ];
            if (!empty($this->config['accessToken'])) {
                $this->setToken($this->config['accessToken']);
            }
        }
    }

    public function getToken() {
        return $this->token;
    }

    public function setToken(string $token, string $refreshToken) {
        $this->authentications['basicAuth']['accessToken'] = $token;
        $this->authentications['basicAuth']['refreshToken'] = $refreshToken;
        $this->authentications['basicAuth']['password'] = null;
        $this->token = $token;
    }

    public function getAuthentication() {
        return $this->authentications;
    }

    public function changeHost($host) {
        $this->config['hostOauth2'] = $host;
    }

    public function isLoggedIn() {
        return empty($this->authentications['basicAuth']['accessToken']);
    }

    public function login(string $username, string $password) {
        $postBody = $pathParams = $queryParams = $formParams = $authNames = [];
        $auth = 'Basic ' . base64_encode($this->config['oauth2']['clientId'] . ':' . $this->config['oauth2']['secret']);
        $headerParams = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => $auth
        ];
        $formParams = [
            'username' => $username,
            'password' => $password,
            'grant_type' => 'password',
            'client_id' => $this->config['oauth2']['clientId']
        ];
        $contentTypes = ['application/x-www-form-urlencoded'];
        $accepts = ['application/json'];
        $url = $this->config['oauth2']['authPath']?:'/oauth/token';
        return $this->callApi($url, 'POST', $pathParams, $queryParams, $headerParams, $formParams, $postBody, $authNames, $contentTypes, $accepts, null)
            ->then(function($data) {
                $this->setToken($data['access_token'], $data['refresh_token']);
                return $data;
            }, function($error) {
                throw $error;
            });
    }

    public function refreshToken() {
        $postBody = $pathParams = $queryParams = $formParams = $authNames = [];
        $auth = 'Basic ' . base64_encode($this->config['oauth2']['clientId'] . ':' . $this->config['oauth2']['secret']);
        $headerParams = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Cache-Control' => 'no-cache',
            'Authorization' => $auth
        ];
        $queryParams = [
            'refresh_token' => $this->authentications['basicAuth']['refreshToken'],
            'grant_type' => 'refresh_token'
        ];
        $contentTypes = ['application/x-www-form-urlencoded'];
        $accepts = ['application/json'];

        return $this->callApi('/oauth/token', 'POST', $pathParams, $queryParams, $headerParams, $formParams, $postBody, $authNames, $contentTypes, $accepts, null)
            ->then(function($data) {
                $this->setToken($data['access_token'], $data['refresh_token']);
                return $data;
            }, function($error) {
                throw $error;
            });
    }
}