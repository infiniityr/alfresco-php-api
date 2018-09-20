<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 18:33
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Api;


use AlfPHPApi\AlfrescoActivitiRestApi\Model\CreateEndpointBasicAuthRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\EndpointBasicAuthRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\EndpointConfigurationRepresentation;
use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class AdminEndpointsApi
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
     * @param CreateEndpointBasicAuthRepresentation $createRepresentation
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createBasicAuthConfiguration(CreateEndpointBasicAuthRepresentation $createRepresentation){
        if (empty($createRepresentation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'createRepresentation' when calling createBasicAuthConfiguration");
        }
        $postBody = $createRepresentation;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = EndpointBasicAuthRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/basic-auths', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param EndpointConfigurationRepresentation $representation
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createEndpointConfiguration(EndpointConfigurationRepresentation $representation) {
        if (empty($representation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'representation' when calling createEndpointConfiguration");
        }
        $postBody = $representation;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = EndpointConfigurationRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/endpoints', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $basicAuthId
     * @param int $tenantId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getBasicAuthConfiguration(int $basicAuthId, int $tenantId) {
        if (empty($basicAuthId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'basicAuthId' when calling getBasicAuthConfiguration");
        }
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling getBasicAuthConfiguration");
        }
        $postBody = null;
        $pathParams = [
            'basicAuthId' => $basicAuthId
        ];
        $queryParams = [
            'tenantId' => $tenantId
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = EndpointBasicAuthRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/basic-auths/{basicAuthId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $tenantId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getBasicAuthConfigurations(int $tenantId) {
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling getBasicAuthConfigurations");
        }
        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'tenantId' => $tenantId
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = [EndpointBasicAuthRepresentation::class];

        return $this->apiClient->callApi(
            '/api/enterprise/admin/basic-auths', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $endpointConfigurationId
     * @param int $tenantId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getEndpointConfiguration(int $endpointConfigurationId, int $tenantId) {
        if (empty($endpointConfigurationId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'endpointConfigurationId' when calling getEndpointConfiguration");
        }
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling getEndpointConfiguration");
        }
        $postBody = null;
        $pathParams = [
            'endpointConfigurationId' => $endpointConfigurationId
        ];
        $queryParams = [
            'tenantId' => $tenantId
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = EndpointConfigurationRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/endpoints/{endpointConfigurationId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $tenantId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getEndpointConfigurations(int $tenantId) {
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling getEndpointConfigurations");
        }
        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'tenantId' => $tenantId
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = [EndpointConfigurationRepresentation::class];

        return $this->apiClient->callApi(
            '/api/enterprise/admin/endpoints', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $basicAuthId
     * @param int $tenantId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function removeBasicAuthConfiguration(int $basicAuthId, int $tenantId) {
        if (empty($basicAuthId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'basicAuthId' when calling removeBasicAuthConfiguration");
        }
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling removeBasicAuthConfiguration");
        }
        $postBody = null;
        $pathParams = [
            'basicAuthId' => $basicAuthId
        ];
        $queryParams = [
            'tenantId' => $tenantId
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/basic-auths/{basicAuthId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $endpointConfigurationId
     * @param int $tenantId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function removeEndpointConfiguration(int $endpointConfigurationId, int $tenantId) {
        if (empty($endpointConfigurationId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'endpointConfigurationId' when calling removeEndpointConfiguration");
        }
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling removeEndpointConfiguration");
        }
        $postBody = null;
        $pathParams = [
            'endpointConfigurationId' => $endpointConfigurationId
        ];
        $queryParams = [
            'tenantId' => $tenantId
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/endpoints/{endpointConfigurationId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int                                   $basicAuthId
     * @param CreateEndpointBasicAuthRepresentation $createRepresentation
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateBasicAuthConfiguration(int $basicAuthId, CreateEndpointBasicAuthRepresentation $createRepresentation) {
        if (empty($basicAuthId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'basicAuthId' when calling updateBasicAuthConfiguration");
        }
        if (empty($createRepresentation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'createRepresentation' when calling updateBasicAuthConfiguration");
        }
        $postBody = $createRepresentation;
        $pathParams = [
            'basicAuthId' => $basicAuthId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = EndpointBasicAuthRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/basic-auths/{basicAuthId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int                                 $endpointConfigurationId
     * @param EndpointConfigurationRepresentation $representation
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateEndpointConfiguration(int $endpointConfigurationId, EndpointConfigurationRepresentation $representation) {
        if (empty($endpointConfigurationId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'endpointConfigurationId' when calling updateEndpointConfiguration");
        }
        if (empty($representation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'representation' when calling updateEndpointConfiguration");
        }
        $postBody = $representation;
        $pathParams = [
            'endpointConfigurationId' => $endpointConfigurationId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = EndpointConfigurationRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/endpoints/{endpointConfigurationId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}