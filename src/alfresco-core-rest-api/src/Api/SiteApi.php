<?php
/**
 * Nom du fichier : SiteApi.php
 * Projet : alfresco-php-api
 * Date : 18/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteContainerEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteContainerPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMemberBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMemberEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMemberPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMemberRoleBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SitePaging;

class SiteApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * SiteApi constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient?:ApiClient::$instance;
    }

    /**
     * Add a person
     * Adds person **personId** as a member of a site **siteId**.\n\nYou can set the **role** to one of four types:\n\n* SiteConsumer\n* SiteCollaborator\n* SiteContributor\n* SiteManager\n
     * @param string $siteId The identifier of a site
     * @param SiteMemberBody $siteMemberBody The person to add and their role
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addSiteMember(string $siteId, SiteMemberBody $siteMemberBody)
    {
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling addSiteMember");
        }
        if (empty($siteMemberBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteMemberBody' when calling addSiteMember");
        }

        $postBody = $siteMemberBody;
        $pathParams = [
            'siteId' => $siteId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteMemberEntry::class;

        return $this->apiClient->callApi(
            '/sites/{siteId}/members', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Create a site
     * Creates a default site with the given details.  Unless explicitly specified, the site id will be generated from the site title. The site id must be unique and only contain alphanumeric and/or dash\ncharacters.\n\nFor example, to create a public site called \&quot;Marketing\&quot; the following body could be used:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;title\&quot;: \&quot;Marketing\&quot;,\n  \&quot;visibility\&quot;: \&quot;PUBLIC\&quot;\n}\n&#x60;&#x60;&#x60;\n\nThe creation of the (surf) configuration files required by Share can be skipped via the **skipConfiguration** query parameter.\n\n**Please note: if skipped then such a site will *not* work within Share.**\n\nThe addition of the site to the user&#39;s site favorites can be skipped via the **skipAddToFavorites** query parameter.\n\nThe creator will be added as a member with Site Manager role.\n
     * @param SiteBody $siteBody The site details
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createSite(SiteBody $siteBody, array $opts = [])
    {
        $opts = array_merge([
            'skipConfiguration' => false,
            'skipAddToFavorites' => false
        ], $opts);
        if (empty($siteBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteBody' when calling createSite");
        }

        $postBody = $siteBody;
        $pathParams = [];
        $queryParams = [
            'skipConfiguration' => $opts['skipConfiguration'],
            'skipAddToFavorites' => $opts['skipAddToFavorites']
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteEntry::class;

        return $this->apiClient->callApi(
            '/sites', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Delete a site
     * Deletes the site with **siteId**
     * @param string $siteId The identifier of a site.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteSite(string $siteId, array $opts = [])
    {
        $opts = array_merge([
            'permanent' => false
        ], $opts);
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling deleteSite");
        }

        $postBody = null;
        $pathParams = [
            'siteId' => $siteId
        ];
        $queryParams = [
            'permanent' => $opts['permanent']?:false
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/sites/{siteId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a site
     * Returns information for site **siteId**.\n\nYou can use the **relations** parameter to include one or more related\nentities in a single response and so reduce network traffic.\n\nThe entity types in Alfresco are organized in a tree structure.\nThe **sites** entity has two children, **containers** and **members**.\nThe following relations parameter returns all the container and member\nobjects related to the site **siteId**:\n\n&#x60;&#x60;&#x60;\ncontainers,members\n&#x60;&#x60;&#x60;\n
     * @param string $siteId The identifier of a site
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSite(string $siteId, array $opts = [])
    {
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling getSite");
        }

        $postBody = null;
        $pathParams = [
            'siteId' => $siteId
        ];
        $queryParams = [
            'relations' => $this->apiClient->buildCollectionParam($opts['relations'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteEntry::class;

        return $this->apiClient->callApi(
            '/sites/{siteId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a container
     * Returns information of the container **containerId** in site **siteId**
     * @param string $siteId The identifier of a site.
     * @param string $containerId The unique identifier of a site container.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSiteContainer(string $siteId, string $containerId, array $opts = [])
    {
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling getSiteContainer");
        }
        if (empty($containerId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'containerId' when calling getSiteContainer");
        }

        $postBody = null;
        $pathParams = [
            'siteId' => $siteId,
            'containerId' => $containerId
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteContainerEntry::class;

        return $this->apiClient->callApi(
            '/sites/{siteId}/containers/{containerId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get containers
     * Returns a list of containers information for site identified by **siteId**.
     * @param string $siteId The identifier of a site.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSiteContainers(string $siteId, array $opts = [])
    {
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling getSiteContainers");
        }

        $postBody = null;
        $pathParams = [
            'siteId' => $siteId
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteContainerPaging::class;

        return $this->apiClient->callApi(
            '/sites/{siteId}/containers', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a site member
     * Returns site membership information for person **personId** on site **siteId**.
     * @param string $siteId The identifier of a site
     * @param string $personId The identifier of a person
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSiteMember(string $siteId, string $personId, array $opts = [])
    {
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling getSiteMember");
        }
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getSiteMember");
        }

        $postBody = null;
        $pathParams = [
            'siteId' => $siteId,
            'personId' => $personId
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteMemberEntry::class;

        return $this->apiClient->callApi(
            '/sites/{siteId}/members/{personId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get members
     * Returns a list of site memberships for site **siteId**.
     * @param string $siteId The identifier of a site
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSiteMembers(string $siteId, array $opts = [])
    {
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling getSiteMembers");
        }

        $postBody = null;
        $pathParams = [
            'siteId' => $siteId
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteMemberPaging::class;

        return $this->apiClient->callApi(
            '/sites/{siteId}/members', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get sites
     * Returns a list of sites in this repository. You can sort the list if sites using the **orderBy** parameter.\n**orderBy** specifies the name of one or more\ncomma separated properties.\nFor each property you can optionally specify the order direction.\nBoth of the these **orderBy** examples retrieve sites ordered by ascending name:\n\n&#x60;&#x60;&#x60;\nname\nname ASC\n&#x60;&#x60;&#x60;\n\nYou can use the **relations** parameter to include one or more related\nentities in a single response and so reduce network traffic.\n\nThe entity types in Alfresco are organized in a tree structure.\nThe **sites** entity has two children, **containers** and **members**.\nThe following relations parameter returns all the container and member\nobjects related to each site:\n\n&#x60;&#x60;&#x60;\ncontainers,members\n&#x60;&#x60;&#x60;\n
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSites(array $opts = [])
    {
        $opts = array_merge([
            'skipCount' => 0,
            'maxItems' => 100,
            'orderBy' => '',
            'relations' => [],
            'fields' => []
        ], $opts);
        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'skipCount' => $opts['skipCount'],
            'maxItems' => $opts['maxItems'],
            'orderBy' => $opts['orderBy'],
            'relations' => $this->apiClient->buildCollectionParam($opts['relations'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SitePaging::class;

        return $this->apiClient->callApi(
            '/sites', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Remove a site member
     * Removes person **personId** as a member of site **siteId**
     * @param string $siteId The identifier of a site
     * @param string $personId The identifier of a person
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function removeSiteMember(string $siteId, string $personId)
    {
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling removeSiteMember");
        }
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling removeSiteMember");
        }

        $postBody = null;
        $pathParams = [
            'siteId' => $siteId,
            'personId' => $personId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/sites/{siteId}/members/{personId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Update a site member
     * Update the membership of person **personId** in site **siteId**.\n\nYou can set the **role** to one of four types:\n\n* SiteConsumer\n* SiteCollaborator\n* SiteContributor\n* SiteManager\n
     * @param string $siteId The identifier of a site.
     * @param string $personId The identifier of a person
     * @param SiteMemberRoleBody $siteMemberRoleBody The persons new role
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateSiteMember(string $siteId, string $personId, SiteMemberRoleBody $siteMemberRoleBody)
    {
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling updateSiteMember");
        }
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling updateSiteMember");
        }
        if (empty($siteMemberRoleBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteMemberRoleBody' when calling updateSiteMember");
        }

        $postBody = $siteMemberRoleBody;
        $pathParams = [
            'siteId' => $siteId,
            'personId' => $personId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteMemberEntry::class;

        return $this->apiClient->callApi(
            '/sites/{siteId}/members/{personId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}