<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 08/07/2018
 * Time: 22:15
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\GroupBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\GroupMember;
use AlfPHPApi\AlfrescoCoreRestApi\Model\GroupMemberEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\GroupMemberPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\GroupsEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\GroupsPaging;

class GroupsApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * NetworksApi constructor.
     *
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?: ApiClient::$instance;
    }

    /**
     * Create a new group
     *
     * @param GroupBody $groupBody The new group
     * @param array     $opts      Optinoal parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createGroup(GroupBody $groupBody, array $opts = [])
    {
        if (empty($groupBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupBody' when calling createGroup");
        }

        $postBody = $groupBody;
        $pathParams = [];
        $queryParams = [
            'fields'  => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = GroupsEntry::class;

        return $this->apiClient->callApi(
            '/groups', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get groups
     * Returns a list of groups in this repository. You can sort the list if groups using the **orderBy** parameter.\n**orderBy** specifies the name of one or more\ncomma separated properties.\nFor each property you can optionally specify the order direction.\nBoth of the these **orderBy** examples retrieve sites ordered by ascending name:\n\n&#x60;&#x60;&#x60;\nname\nname ASC\n&#x60;&#x60;&#x60;\n\nYou can use the **relations** parameter to include one or more related\nentities in a single response and so reduce network traffic.\n\nThe entity types in Alfresco are organized in a tree structure.\nThe **sites** entity has two children, **containers** and **members**.\nThe following relations parameter returns all the container and member\nobjects related to each site:\n\n&#x60;&#x60;&#x60;\ncontainers,members\n&#x60;&#x60;&#x60;\n
     *
     * @param array $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getGroups(array $opts = [])
    {
        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'skipCount' => $opts['skipCount'] ?: 0,
            'maxItems'  => $opts['maxItems'] ?: 100,
            'orderBy'   => $opts['orderBy'] ?: '',
            'where'     => $opts['where'] ?: '',
            'fields'    => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
            'include'   => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = GroupsPaging::class;

        return $this->apiClient->callApi(
            '/groups', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Delete a group
     * Deletes the site with **groupId**
     *
     * @param string $groupId The identifier of a site
     * @param array  $opts    Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteGroup(string $groupId, array $opts = [])
    {
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling deleteGroup");
        }

        $postBody = null;
        $pathParams = [
            'groupId' => $groupId,
        ];
        $queryParams = [
            'cascade' => $opts['cascade'] ?: false,
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/groups/{groupId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a group
     * Returns information for site **groupId**.\n\nYou can use the **relations** parameter to include one or more related\nentities in a single response and so reduce network traffic.\n\nThe entity types in Alfresco are organized in a tree structure.\nThe **sites** entity has two children, **containers** and **members**.\nThe following relations parameter returns all the container and member\nobjects related to the site **siteId**:\n\n&#x60;&#x60;&#x60;\ncontainers,members\n&#x60;&#x60;&#x60;\n
     *
     * @param string $groupId The identifier of a group.
     * @param array  $opts    Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getGroup(string $groupId, array $opts = [])
    {
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling getGroup");
        }

        $postBody = null;
        $pathParams = [
            'groupId' => $groupId,
        ];
        $queryParams = [
            'fields'  => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = GroupsEntry::class;

        return $this->apiClient->callApi(
            '/groups/{groupId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Update a site member
     * Update details (displayName) for group groupId. You must have admin rights to update a group.
     *
     * @param string    $groupId   The identifier of a site.
     * @param GroupBody $groupBody only the displayName change attribute is allowed.
     * @param array     $opts      Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateGroup(string $groupId, GroupBody $groupBody, array $opts = [])
    {
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling updateGroup");
        }
        if (empty($groupBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupBody' when calling updateGroup");
        }
        if (empty($groupBody->id)) {
            throw new \InvalidArgumentException("Id change not allowed in 'groupBody' when calling updateGroup");
        }

        $postBody = null;
        $pathParams = [
            'groupId' => $groupId,
        ];
        $queryParams = [
            'fields'  => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = GroupsEntry::class;

        return $this->apiClient->callApi(
            '/groups/{groupId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get group members
     * Returns a list of members for group **groupId**
     *
     * @param string $groupId The identifier of a site.
     * @param array  $opts    Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getGroupMembers(string $groupId, array $opts = [])
    {
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling getGroupMembers");
        }

        $postBody = null;
        $pathParams = [
            'groupId' => $groupId,
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount'] ?: 0,
            'maxItems'  => $opts['maxItems'] ?: 100,
            'orderBy'   => $opts['orderBy'] ?: '',
            'where'     => $opts['where'] ?: '',
            'fields'    => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = GroupMemberPaging::class;

        return $this->apiClient->callApi(
            '/groups/{groupId}/members', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Add a group member
     * Create a group membership (for an existing person or group) within a group groupId.
     *
     * @param string      $groupId         The identifier of a site
     * @param GroupMember $groupMemberBody The persons new role
     * @param array       $opts            Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addGroupMember(string $groupId, GroupMember $groupMemberBody, array $opts = [])
    {
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling addGroupMember");
        }
        if (empty($groupMemberBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupMemberBody' when calling addGroupMember");
        }

        $postBody = null;
        $pathParams = [
            'groupId' => $groupId,
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = GroupMemberEntry::class;

        return $this->apiClient->callApi(
            '/groups/{groupId}/members', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Delete a group membership
     * Deletes the membership **groupMemberId** from group **groupId**
     *
     * @param string $groupId       The identifier of a group.
     * @param string $groupMemberId The identifier of a group membership
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteGroupMember(string $groupId, string $groupMemberId)
    {
        if (empty($groupId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupId' when calling deleteGroupMember");
        }
        if (empty($groupMemberId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'groupMemberId' when calling deleteGroupMember");
        }

        $postBody = null;
        $pathParams = [
            'groupId'       => $groupId,
            'groupMemberId' => $groupMemberId,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = GroupMemberEntry::class;

        return $this->apiClient->callApi(
            '/groups/{groupId}/members/{groupMemberId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}