<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 05/07/2018
 * Time: 08:58
 */

namespace AlfPHPApi\AlfrescoAuthRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class AuthenticationApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * PeopleApi constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient?:ApiClient::$instance;
    }
}