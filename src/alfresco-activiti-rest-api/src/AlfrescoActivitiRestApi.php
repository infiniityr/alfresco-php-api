<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 22:38
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi;


use AlfPHPApi\AlfrescoActivitiRestApi\Api\AboutApi;
use AlfPHPApi\AlfrescoActivitiRestApi\Api\AdminEndpointsApi;
use AlfPHPApi\AlfrescoActivitiRestApi\Api\AdminGroupsApi;
use AlfPHPApi\AlfrescoActivitiRestApi\Api\AdminTenantApi;
use AlfPHPApi\AlfrescoActivitiRestApi\Api\AdminUsersApi;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\AddGroupCapabilitiesRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\BulkUserUpdateRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\CreateEndpointBasicAuthRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\CreateTenantRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\EndpointConfigurationRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\File;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\GroupRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\UserRepresentation;
use AlfPHPApi\BaseListApi;

/**
 * Class AlfrescoActivitiRestApi
 * @package AlfPHPApi\AlfrescoActivitiRestApi
 *
 * @property-read AboutApi $aboutApi
 * @property-read AboutApi $about
 * @property-read AdminEndpointsApi $adminEndpointsApi
 * @property-read AdminEndpointsApi $adminEndpoints
 * @property-read AdminGroupsApi $adminGroupsApi
 * @property-read AdminGroupsApi $adminGroups
 * @property-read AdminTenantApi $adminTenantApi
 * @property-read AdminTenantApi $adminTenant
 * @property-read AdminUsersApi $adminUsersApi
 * @property-read AdminUsersApi $adminUsers
 *
 * METHODS
 * AboutAPI
 * @method \GuzzleHttp\Promise\PromiseInterface getAppVersion()
 *
 * AdminEndpointsAPi
 * @method \GuzzleHttp\Promise\PromiseInterface createBasicAuthConfiguration(CreateEndpointBasicAuthRepresentation $createRepresentation)
 * @method \GuzzleHttp\Promise\PromiseInterface createEndpointConfiguration(EndpointConfigurationRepresentation $representation)
 * @method \GuzzleHttp\Promise\PromiseInterface getBasicAuthConfiguration(int $basicAuthId, int $tenantId)
 * @method \GuzzleHttp\Promise\PromiseInterface getBasicAuthConfigurations(int $tenantId)
 * @method \GuzzleHttp\Promise\PromiseInterface getEndpointConfiguration(int $endpointConfigurationId, int $tenantId)
 * @method \GuzzleHttp\Promise\PromiseInterface getEndpointConfigurations(int $tenantId)
 * @method \GuzzleHttp\Promise\PromiseInterface removeBasicAuthConfiguration(int $basicAuthId, int $tenantId)
 * @method \GuzzleHttp\Promise\PromiseInterface removeEndpointConfiguration(int $endpointConfigurationId, int $tenantId)
 * @method \GuzzleHttp\Promise\PromiseInterface updateBasicAuthConfiguration(int $basicAuthId, CreateEndpointBasicAuthRepresentation $createRepresentation)
 * @method \GuzzleHttp\Promise\PromiseInterface updateEndpointConfiguration(int $endpointConfigurationId, EndpointConfigurationRepresentation $representation)
 *
 * AdminGroupsApi
 * @method \GuzzleHttp\Promise\PromiseInterface activate(int $groupId)
 * @method \GuzzleHttp\Promise\PromiseInterface addAllUsersToGroup(int $groupId)
 * @method \GuzzleHttp\Promise\PromiseInterface addGroupCapabilities(int $groupId, AddGroupCapabilitiesRepresentation $addGroupCapabilitiesRepresentation)
 * @method \GuzzleHttp\Promise\PromiseInterface addGroupMember(int $groupId, int $userId)
 * @method \GuzzleHttp\Promise\PromiseInterface addRelatedGroup(int $groupId, int $relatedGroupId, string $type)
 * @method \GuzzleHttp\Promise\PromiseInterface createNewGroup(GroupRepresentation $groupRepresentation)
 * @method \GuzzleHttp\Promise\PromiseInterface deleteGroupCapability(int $groupId, int $groupCapabilityId)
 * @method \GuzzleHttp\Promise\PromiseInterface deleteGroupMember(int $groupId, int $userId)
 * @method \GuzzleHttp\Promise\PromiseInterface deleteGroup(int $groupId)
 * @method \GuzzleHttp\Promise\PromiseInterface deleteRelatedGroup(int $groupId, int $relatedGroupId)
 * @method \GuzzleHttp\Promise\PromiseInterface getCapabilities(int $groupId)
 * @method \GuzzleHttp\Promise\PromiseInterface getGroupUsers(int $groupId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getGroup(int $groupId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getGroups(array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getRelatedGroups(int $groupId)
 * @method \GuzzleHttp\Promise\PromiseInterface updateGroup(int $groupId, GroupRepresentation $groupRepresentation)
 *
 * AdminTenantApi
 * @method \GuzzleHttp\Promise\PromiseInterface createTenant(CreateTenantRepresentation $createTenantRepresentation)
 * @method \GuzzleHttp\Promise\PromiseInterface deleteTenant(int $tenantId)
 * @method \GuzzleHttp\Promise\PromiseInterface getTenantEvents(int $tenantId)
 * @method \GuzzleHttp\Promise\PromiseInterface getTenantLogo(int $tenantId)
 * @method \GuzzleHttp\Promise\PromiseInterface getTenant(int $tenantId)
 * @method \GuzzleHttp\Promise\PromiseInterface getTenants()
 * @method \GuzzleHttp\Promise\PromiseInterface updateTenant(int $tenantId, CreateTenantRepresentation $createTenantRepresentation)
 * @method \GuzzleHttp\Promise\PromiseInterface uploadTenantLogo(int $tenantId, File $file)
 *
 * AdminUsersApi
 * @method \GuzzleHttp\Promise\PromiseInterface updateUserDetails(int $userId, UserRepresentation $userRepresentation)
 * @method \GuzzleHttp\Promise\PromiseInterface bulkUpdateUsers(BulkUserUpdateRepresentation $update)
 * @method \GuzzleHttp\Promise\PromiseInterface createNewUser(UserRepresentation $userRepresentation)
 * @method \GuzzleHttp\Promise\PromiseInterface getUser(int $userId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getUsers(array $opts = [])
 */
class AlfrescoActivitiRestApi extends BaseListApi
{
    public static $toLoad = [
        AboutApi::class,
        AdminEndpointsApi::class,
        AdminGroupsApi::class,
        AdminTenantApi::class,
        AdminUsersApi::class,
        
    ];
}