<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 20/09/2018
 * Time: 22:00
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Api;


use AlfPHPApi\AlfrescoActivitiRestApi\Model\AbstractUserRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\BulkUserUpdateRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\ResultListDataRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\UserRepresentation;
use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class AdminUsersApi
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
     * @param int                $userId
     * @param UserRepresentation $userRepresentation
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateUserDetails(int $userId, UserRepresentation $userRepresentation){
        if (empty($userId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'userId' when calling updateUserDetails");
        }
        if (empty($userRepresentation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'userRepresentation' when calling updateUserDetails");
        }
        $postBody = $userRepresentation;
        $pathParams = [
            'userId' => $userId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/users/{userId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param BulkUserUpdateRepresentation $update
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function bulkUpdateUsers(BulkUserUpdateRepresentation $update){
        if (empty($update)) {
            throw new \InvalidArgumentException("Missing the required parameter 'update' when calling bulkUpdateUsers");
        }
        $postBody = $update;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/users', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param UserRepresentation $userRepresentation
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createNewUser(UserRepresentation $userRepresentation){
        if (empty($userRepresentation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'userRepresentation' when calling createNewUser");
        }
        $postBody = $userRepresentation;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = UserRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/users', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int   $userId
     * @param array $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getUser(int $userId, array $opts = []){
        if (empty($userId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'userId' when calling getUser");
        }
        $opts = array_merge(['summary' => null], $opts);
        $postBody = null;
        $pathParams = [
            'userId' => $userId
        ];
        $queryParams = [
            'summary' => $opts['summary']
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = AbstractUserRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/users/{userId}', 'GET',
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
    public function getUsers(array $opts = []){
        $opts = array_merge([
            'filter' => null,
            'status' => null,
            'accountType' => null,
            'sort' => null,
            'company' => null,
            'start' => null,
            'page' => null,
            'size' => null,
            'groupId' => null,
            'tenantId' => null,
            'summary' => null
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
            '/api/enterprise/admin/users', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}