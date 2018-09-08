<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 05/07/2018
 * Time: 09:01
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoDiscoveryRestApi\Model\DiscoveryEntry;

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

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getRepositoryInformation(){
        $postBody = null;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = [];
        $accepts = ['application/json'];
        $returnType = DiscoveryEntry::class;

        return $this->apiClient->callApi(
            '/discovery', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}