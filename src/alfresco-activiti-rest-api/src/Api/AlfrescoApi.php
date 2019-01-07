<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 20/09/2018
 * Time: 22:28
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Api;


use AlfPHPApi\AlfrescoActivitiRestApi\Model\ResultListDataRepresentation;
use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class AlfrescoApi
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
     * @param string $code
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function confirmAuthorisation(string $code){
        if (empty($code)) {
            throw new \InvalidArgumentException("Missing the required parameter 'code' when calling confirmAuthorisation");
        }
        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'code' => $code
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/integration/alfresco-cloud/confirm-auth-request', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getAllNetworks(){
        $postBody = null;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ResultListDataRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/integration/alfresco-cloud/networks', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param string $id The networkId OR the repositoryId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getAllSites(string $id){
        if (empty($id)) {
            throw new \InvalidArgumentException("Missing the required parameter 'id' when calling getAllSites");
        }
        $postBody = null;
        $pathParams = [
            'id' => $id
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ResultListDataRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/integration/alfresco-cloud/networks/{id}/sites', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param string $id        The networkId OR the repositoryId
     * @param string $folderId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getContentInFolder(string $id, string $folderId){
        if (empty($id)) {
            throw new \InvalidArgumentException("Missing the required parameter 'id' when calling getContentInFolder");
        }
        if (empty($folderId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'folderId' when calling getContentInFolder");
        }
        $postBody = null;
        $pathParams = [
            'id' => $id,
            'folderId' => $folderId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ResultListDataRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/integration/alfresco-cloud/networks/{id}/folders/{folderId}/content', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param string $id     The networkId OR the repositoryId
     * @param string $siteId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getContentInSite(string $id, string $siteId){
        if (empty($id)) {
            throw new \InvalidArgumentException("Missing the required parameter 'id' when calling getContentInFolder");
        }
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling getContentInFolder");
        }
        $postBody = null;
        $pathParams = [
            'id' => $id,
            'siteId' => $siteId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ResultListDataRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/integration/alfresco-cloud/networks/{id}/sites/{siteId}/content', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param array $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getRepositories(array $opts = []){
        $opts = array_merge([
            'tenantId' => null,
            'includeAccounts' => null
        ], $opts);
        $postBody = null;
        $pathParams = [];
        $queryParams = $opts;
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ResultListDataRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/profile/accounts/alfresco', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}