<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 05/07/2018
 * Time: 08:59
 */

namespace AlfPHPApi\AlfrescoGsCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class FilePlansApi
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