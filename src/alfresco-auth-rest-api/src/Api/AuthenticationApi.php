<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 05/07/2018
 * Time: 08:58
 */

namespace AlfPHPApi\AlfrescoAuthRestApi\Api;


use AlfPHPApi\AlfrescoAuthRestApi\Model\LoginRequest;
use AlfPHPApi\AlfrescoAuthRestApi\Model\LoginTicketEntry;
use AlfPHPApi\AlfrescoAuthRestApi\Model\ValidateTicketEntry;
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

    public function createTicket(LoginRequest $loginRequest)
    {
        if (empty($loginRequest)) {
            throw new \InvalidArgumentException("Missing the required parameter 'loginRequest' when calling createTicket");
        }

        $postBody = $loginRequest;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = LoginTicketEntry::class;

        return $this->apiClient->callApi(
            '/tickets', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    public function deleteTicket()
    {
        $postBody = null;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/tickets/-me-', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    public function validateTicket()
    {
        $postBody = null;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ValidateTicketEntry::class;

        return $this->apiClient->callApi(
            '/tickets/-me-', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}