<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 05/07/2018
 * Time: 09:01
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class DiscoveryApi
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