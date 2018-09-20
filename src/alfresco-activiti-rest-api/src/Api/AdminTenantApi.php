<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 20/09/2018
 * Time: 21:35
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Api;


use AlfPHPApi\AlfrescoActivitiRestApi\Model\CreateTenantRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\File;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\ImageUploadRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\LightTenantRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\TenantEvent;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\TenantRepresentation;
use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class AdminTenantApi
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
     * @param CreateTenantRepresentation $createTenantRepresentation
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createTenant(CreateTenantRepresentation $createTenantRepresentation){
        if (empty($createTenantRepresentation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'createTenantRepresentation' when calling createTenant");
        }
        $postBody = $createTenantRepresentation;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = LightTenantRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/tenants', 'POST',
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
    public function deleteTenant(int $tenantId){
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling deleteTenant");
        }
        $postBody = null;
        $pathParams = [
            'tenantId' => $tenantId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/tenants/{tenantId}', 'DELETE',
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
    public function getTenantEvents(int $tenantId){
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling getTenantEvents");
        }
        $postBody = null;
        $pathParams = [
            'tenantId' => $tenantId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = [TenantEvent::class];

        return $this->apiClient->callApi(
            '/api/enterprise/admin/tenants/{tenantId}/events', 'GET',
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
    public function getTenantLogo(int $tenantId){
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling getTenantLogo");
        }
        $postBody = null;
        $pathParams = [
            'tenantId' => $tenantId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/tenants/{tenantId}/logo', 'GET',
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
    public function getTenant(int $tenantId){
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling getTenant");
        }
        $postBody = null;
        $pathParams = [
            'tenantId' => $tenantId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = TenantRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/tenants/{tenantId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getTenants(){
        $postBody = null;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = [LightTenantRepresentation::class];

        return $this->apiClient->callApi(
            '/api/enterprise/admin/tenants', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int                        $tenantId
     * @param CreateTenantRepresentation $createTenantRepresentation
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateTenant(int $tenantId, CreateTenantRepresentation $createTenantRepresentation){
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling updateTenant");
        }
        if (empty($createTenantRepresentation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'createTenantRepresentation' when calling updateTenant");
        }
        $postBody = $createTenantRepresentation;
        $pathParams = [
            'tenantId' => $tenantId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = TenantRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/tenants/{tenantId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * @param int  $tenantId
     * @param File $file
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function uploadTenantLogo(int $tenantId, File $file){
        if (empty($tenantId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tenantId' when calling updateTenant");
        }
        if (empty($createTenantRepresentation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'createTenantRepresentation' when calling updateTenant");
        }
        $postBody = null;
        $pathParams = [
            'tenantId' => $tenantId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [
            'file' => $file
        ];
        $authNames = [];
        $contentTypes = ['multipart/form-data'];
        $accepts = ['application/json'];
        $returnType = ImageUploadRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/tenants/{tenantId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}