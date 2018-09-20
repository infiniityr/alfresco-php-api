<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 22:30
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Api;


use AlfPHPApi\AlfrescoActivitiRestApi\Model\AbstractGroupRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\AddGroupCapabilitiesRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\GroupRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\LightGroupRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\ResultListDataRepresentation;
use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class AdminGroupsApi
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
     * @param int $groupId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function activate(int $groupId){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling activate");
        }
        $postBody = null;
        $pathParams = [
            'groupId' => $groupId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}/action/activate', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $groupId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addAllUsersToGroup(int $groupId){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling addAllUsersToGroup");
        }
        $postBody = null;
        $pathParams = [
            'groupId' => $groupId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}/add-all-users', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int                                $groupId
     * @param AddGroupCapabilitiesRepresentation $addGroupCapabilitiesRepresentation
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addGroupCapabilities(int $groupId, AddGroupCapabilitiesRepresentation $addGroupCapabilitiesRepresentation){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling addGroupCapabilities");
        }
        if (empty($addGroupCapabilitiesRepresentation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'addGroupCapabilitiesRepresentation' when calling addGroupCapabilities");
        }
        $postBody = $addGroupCapabilitiesRepresentation;
        $pathParams = [
            'groupId' => $groupId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}/capabilities', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $groupId
     * @param int $userId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addGroupMember(int $groupId, int $userId){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling addGroupMember");
        }
        if (empty($userId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'userId' when calling addGroupMember");
        }
        $postBody = null;
        $pathParams = [
            'groupId' => $groupId,
            'userId' => $userId,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}/members/{userId}', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int    $groupId
     * @param int    $relatedGroupId
     * @param string $type
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addRelatedGroup(int $groupId, int $relatedGroupId, string $type){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling addRelatedGroup");
        }
        if (empty($relatedGroupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'relatedGroupId' when calling addRelatedGroup");
        }
        if (empty($type)) {
            throw new \InvalidArgumentException("Missing the required parameter 'type' when calling addRelatedGroup");
        }
        $postBody = null;
        $pathParams = [
            'groupId' => $groupId,
            'relatedGroupId' => $relatedGroupId,
        ];
        $queryParams = [
            'type' => $type
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}/related-groups/{relatedGroupId}', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param GroupRepresentation $groupRepresentation
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createNewGroup(GroupRepresentation $groupRepresentation){
        if (empty($groupRepresentation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupRepresentation' when calling createNewGroup");
        }
        $postBody = $groupRepresentation;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = GroupRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $groupId
     * @param int $groupCapabilityId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteGroupCapability(int $groupId, int $groupCapabilityId){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling deleteGroupCapability");
        }
        if (empty($groupCapabilityId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupCapabilityId' when calling deleteGroupCapability");
        }
        $postBody = null;
        $pathParams = [
            'groupId' => $groupId,
            'groupCapabilityId' => $groupCapabilityId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}/capabilities/{groupCapabilityId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $groupId
     * @param int $userId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteGroupMember(int $groupId, int $userId){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling deleteGroupMember");
        }
        if (empty($userId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'userId' when calling deleteGroupMember");
        }
        $postBody = null;
        $pathParams = [
            'groupId' => $groupId,
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
            '/api/enterprise/admin/groups/{groupId}/members/{userId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $groupId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteGroup(int $groupId){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling deleteGroup");
        }
        $postBody = null;
        $pathParams = [
            'groupId' => $groupId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $groupId
     * @param int $relatedGroupId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteRelatedGroup(int $groupId, int $relatedGroupId){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling deleteRelatedGroup");
        }
        if (empty($relatedGroupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'relatedGroupId' when calling deleteRelatedGroup");
        }
        $postBody = null;
        $pathParams = [
            'groupId' => $groupId,
            'relatedGroupId' => $relatedGroupId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}/related-groups/{relatedGroupId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $groupId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getCapabilities(int $groupId){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling getCapabilities");
        }
        $postBody = null;
        $pathParams = [
            'groupId' => $groupId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ['String'];

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}/potential-capabilities', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int        $groupId
     * @param array|null $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getGroupUsers(int $groupId, array $opts = []){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling getGroupUsers");
        }
        $opts = array_merge(['filter' => null, 'page' => null, 'pageSize' => null], $opts);

        $postBody = null;
        $pathParams = [
            'groupId' => $groupId
        ];
        $queryParams = [
            'filter' => $opts['filter'],
            'page' => $opts['page'],
            'pageSize' => $opts['pageSize']
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ResultListDataRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}/users', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int        $groupId
     * @param array|null $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getGroup(int $groupId, array $opts = []){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling getGroup");
        }
        $opts = array_merge(['includeAllUsers' => null, 'summary' => null], $opts);

        $postBody = null;
        $pathParams = [
            'groupId' => $groupId
        ];
        $queryParams = [
            'includeAllUsers' => $opts['includeAllUsers'],
            'summary' => $opts['summary']
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = AbstractGroupRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param array|null $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getGroups(array $opts = [])
    {
        $opts = array_merge(['tenantId' => null, 'functional' => null, 'summary' => null], $opts);

        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'tenantId'   => $opts['tenantId'],
            'functional' => $opts['functional'],
            'summary'    => $opts['summary']
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = [LightGroupRepresentation::class];

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $groupId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getRelatedGroups(int $groupId){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling getRelatedGroups");
        }

        $postBody = null;
        $pathParams = [
            'groupId' => $groupId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = [LightGroupRepresentation::class];

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}/related-groups', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int                 $groupId
     * @param GroupRepresentation $groupRepresentation
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateGroup(int $groupId, GroupRepresentation $groupRepresentation){
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling updateGroup");
        }
        if (empty($groupRepresentation)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupRepresentation' when calling updateGroup");
        }

        $postBody = $groupRepresentation;
        $pathParams = [
            'groupId' => $groupId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = GroupRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/admin/groups/{groupId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}