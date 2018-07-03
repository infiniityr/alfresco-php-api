<?php
/**
 * Nom du fichier : PeopleApi.php
 * Projet : alfresco-php-api
 * Date : 23/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\ActivityPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\FavoriteBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\FavoriteEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\FavoritePaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\FavoriteSiteBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\GroupsPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\InlineResponse201;
use AlfPHPApi\AlfrescoCoreRestApi\Model\PersonBodyCreate;
use AlfPHPApi\AlfrescoCoreRestApi\Model\PersonEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\PersonNetworkEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\PersonNetworkPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\PersonPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\PreferenceEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\PreferencePaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMembershipBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMembershipBody1;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMembershipRequestEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMembershipRequestPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SitePaging;

class PeopleApi
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
     * Add a favorite
     * Favorite a **site**, **file**, or **folder** in the repository
     * @param string $personId The identifier of a person.
     * @param FavoriteBody $favoriteBody An object identifying the entity to be favorited. \n\nThe object consists of a single property which is an object with the name &#x60;site&#x60;, &#x60;file&#x60;, or &#x60;folder&#x60;. \nThe content of that object is the &#x60;guid&#x60; of the target entity.\n\nFor example, to favorite a file the following body would be used:\n\n&#x60;&#x60;&#x60;JSON\n{\n   \&quot;target\&quot;: {\n      \&quot;file\&quot;: {\n         \&quot;guid\&quot;: \&quot;abcde-01234\&quot;\n      }\n   }\n}\n&#x60;&#x60;&#x60;\n
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addFavorite(string $personId, FavoriteBody $favoriteBody)
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling addFavorite");
        }
        if (empty($favoriteBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'favoriteBody' when calling addFavorite");
        }

        $postBody = $favoriteBody;
        $pathParams = [
            'personId' => $personId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = FavoriteEntry::class;

        return $this->apiClient->callApi(
            '/people/{personId}/favorites', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Create a site membership request
     * Create a site membership request for **personId** and **siteId**. The **personId** will be invited to the site as a SiteConsumer.
     * @param string $personId The identifier of a person.
     * @param SiteMembershipBody $siteMembershipBody Site membership request details.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addSiteMembershipRequest(string $personId, SiteMembershipBody $siteMembershipBody)
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling addSiteMembershipRequest");
        }
        if (empty($siteMembershipBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteMembershipBody' when calling addSiteMembershipRequest");
        }

        $postBody = $siteMembershipBody;
        $pathParams = [
            'personId' => $personId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteMembershipRequestEntry::class;

        return $this->apiClient->callApi(
            '/people/{personId}/site-membership-requests', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Delete favorite site
     * Removes site **siteId** from the favorite site list of person **personId**.\n\n**Note This method is deprecated and will be removed in the future.**\nUse &#x60;/people/{personId}/favorites/{favoriteId}&#x60; instead.\n
     * @param string $personId The identifier of a person.
     * @param string $siteId The identifier of a site.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteFavoriteSite(string $personId, string $siteId)
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling deleteFavoriteSite");
        }
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling deleteFavoriteSite");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId,
            'siteId' => $siteId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/people/{personId}/favorite-sites/{siteId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Favorite a site
     * Add a favorite site for person **personId**.\n\n**Note: that this method is deprecated and will be removed in the future**.\nUse &#x60;/people/{personId}/favorites&#x60; instead.\n
     * @param string $personId The identifier of a person.
     * @param FavoriteSiteBody $favoriteSiteBody The id of the site to favorite
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function favoriteSite(string $personId, FavoriteSiteBody $favoriteSiteBody)
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling favoriteSite");
        }
        if (empty($favoriteSiteBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'favoriteSiteBody' when calling favoriteSite");
        }

        $postBody = $favoriteSiteBody;
        $pathParams = [
            'personId' => $personId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = InlineResponse201::class;

        return $this->apiClient->callApi(
            '/people/{personId}/favorite-sites', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get activities
     * Returns a list of activities for person **personId**
     * @param string $personId The identifier of a person.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getActivities(string $personId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getActivities");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'who' => $opts['who']?:'',
            'siteId' => $opts['siteId']?:'',
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ActivityPaging::class;

        return $this->apiClient->callApi(
            '/people/{personId}/activities', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a favorite
     * Returns favorite **favoriteId** for person **personId**
     * @param string $personId The identifier of a person
     * @param string $favoriteId The identifier of a favorite
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getFavorite(string $personId, string $favoriteId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getFavorite");
        }
        if (empty($favoriteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'favoriteId' when calling getFavorite");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId,
            'favoriteId' => $favoriteId
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = FavoriteEntry::class;

        return $this->apiClient->callApi(
            '/people/{personId}/favorites/{favoriteId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a favorite site
     * Returns information on favorite site **siteId** of person **personId**.\n\n**Note: This method is deprecated and will be removed in the future.**\nUse &#x60;/people/{personId}/favorites/{favoriteId}&#x60; instead.\n
     * @param string $personId The identifier of a person
     * @param string $siteId The identifier of a site
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getFavoriteSite(string $personId, string $siteId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getFavoriteSite");
        }
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling getFavoriteSite");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId,
            'siteId' => $siteId
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteEntry::class;

        return $this->apiClient->callApi(
            '/people/{personId}/favorites-sites/{siteId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get favorite sites
     * Get a person&#39;s favorite sites.\n\n**Note: This method is deprecated and will be removed in the future**.\nUse &#x60;/people/{personId}/favorites&#x60; instead.\n
     * @param string $personId
     * @param array $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getFavoriteSites(string $personId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getFavoriteSites");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId
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
        $returnType = SitePaging::class;

        return $this->apiClient->callApi(
            '/people/{personId}/favorites-sites', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get favorites
     * Returns a list of favorites for person **personId**.\n\nYou can us the &#x60;-me-&#x60; string in place of &#x60;&lt;personId&gt;&#x60; to get the favorites of the currently authenticated user.\n\nYou can use the **where** parameter to restrict the list in the response\nto entries of a specific kind. The **where** parameter takes a value.\nThe value is a single predicate that can include one or more **EXISTS**\nconditions. The **EXISTS** condition uses a single operand to limit the\nlist to include entries that include that one property. The property values are:\n\n*   &#x60;target/file&#x60;\n*   &#x60;target/folder&#x60;\n*   &#x60;target/site&#x60;\n\nFor example, the following **where** parameter restricts the returned list to the file favorites for a person:\n\n&#x60;&#x60;&#x60;SQL\n(EXISTS(target/file))\n&#x60;&#x60;&#x60;\nYou can specify more than one condition using **OR**. The predicate must be enclosed in parentheses.\n\n\nFor example, the following **where** parameter restricts the returned list to the file and folder favorites for a person:\n\n&#x60;&#x60;&#x60;SQL\n(EXISTS(target/file) OR EXISTS(target/folder))\n&#x60;&#x60;&#x60;\n
     * @param string $personId The identifier of a person
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getFavorites(string $personId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getFavorites");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'where' => $opts['where']?:'',
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = FavoritePaging::class;

        return $this->apiClient->callApi(
            '/people/{personId}/favorites', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a person
     * Gets information for the person **personId**
     * @param string $personId The identifier of a person
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getPerson(string $personId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getPerson");
        }

        $postBody = null;
        $pathParams = [
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
        $returnType = PersonEntry::class;

        return $this->apiClient->callApi(
            '/people/{personId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * List people
     * Gets information for the persons
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getPersons(array $opts = [])
    {
        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'where' => $opts['where']?:'',
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = PersonPaging::class;

        return $this->apiClient->callApi(
            '/people', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Add a person
     * If applicable, the given person's login access can also be optionally disabled. You must have admin rights to create a person. You can set custom properties when you create a person:
     * @param PersonBodyCreate $personBodyCreate The PersonBodyCreate object
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addPerson(PersonBodyCreate $personBodyCreate)
    {
        if (empty($personBodyCreate)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personBodyCreate' when calling addPerson");
        }

        $postBody = $personBodyCreate;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = PersonEntry::class;

        return $this->apiClient->callApi(
            '/people', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get network information
     * Returns network information on a single network specified by **networkId** for **personId**
     * @param string $personId The identifier of a person
     * @param string $networkId The identifier of a network
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getPersonNetwork(string $personId, string $networkId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getPersonNetwork");
        }
        if (empty($networkId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'networkId' when calling getPersonNetwork");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId,
            'networkId' => $networkId
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = PersonNetworkEntry::class;

        return $this->apiClient->callApi(
            '/people/{personId}/networks/{networkId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get network membership for a person
     * Gets a list of network memberships for person **personId**
     * @param string $personId The identifier of a person
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getPersonNetworks(string $personId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getPersonNetworks");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId
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
        $returnType = PersonNetworkPaging::class;

        return $this->apiClient->callApi(
            '/people/{personId}/networks', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a preference
     * Returns a specific preference for person **personId**
     * @param string $personId The identifier of a person
     * @param string $preferenceName The name of the preference
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getPreference(string $personId, string $preferenceName, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getPreference");
        }
        if (empty($preferenceName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'preferenceName' when calling getPreference");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId,
            'preferenceName' => $preferenceName
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = PreferenceEntry::class;

        return $this->apiClient->callApi(
            '/people/{personId}/preferences/{preferenceName}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get preferences
     * Returns a list of preferences for person **personId**.\n\nEach preference consists of an **id** and a **value**.\nThe **value** can be of any JSON type.\n
     * @param string $personId
     * @param array $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getPreferences(string $personId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getPreferences");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId
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
        $returnType = PreferencePaging::class;

        return $this->apiClient->callApi(
            '/people/{personId}/preferences', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get site membership information
     * Returns a list of site membership information for person **personId**.\nYou can sort the list of sites using the **orderBy** parameter.\n\n**orderBy** specifies the name of one or more\ncomma separated properties.\nFor each property you can optionally specify the order direction.\nBoth of the these **orderBy** examples retrieve sites ordered by ascending name:\n\n&#x60;&#x60;&#x60;\nname\nname ASC\n&#x60;&#x60;&#x60;\n
     * @param string $personId The identifier of a person
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSiteMembership(string $personId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getSiteMembership");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'orderBy' => $opts['orderBy']?:'',
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
            '/people/{personId}/sites', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get groups membership information
     * Returns a list of site membership information for person **personId**.\nYou can sort the list of sites using the **orderBy** parameter.\n\n**orderBy** specifies the name of one or more\ncomma separated properties.\nFor each property you can optionally specify the order direction.\nBoth of the these **orderBy** examples retrieve sites ordered by ascending name:\n\n&#x60;&#x60;&#x60;\nname\nname ASC\n&#x60;&#x60;&#x60;\n
     * @param string $personId The identifier of a person
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getGroupsMembership(string $personId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getGroupsMembership");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'orderBy' => $opts['orderBy']?:'',
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
            'where' => $opts['where']?:''
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = GroupsPaging::class;

        return $this->apiClient->callApi(
            '/people/{personId}/groups', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a site membership request
     * Returns the site membership request for site **siteId** for person **personId**, if one exists.
     * @param string $personId The identifier of a person.
     * @param string $siteId The identifier of a site
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSiteMembershipRequest(string $personId, string $siteId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getSiteMembershipRequest");
        }
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling getSiteMembershipRequest");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId,
            'siteId' => $siteId
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteMembershipRequestEntry::class;

        return $this->apiClient->callApi(
            '/people/{personId}/site-membership-requests/{siteId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get site membership requests
     * Returns the current site membership requests for person **personId**
     * @param string $personId The identifier of a person
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSiteMembershipRequests(string $personId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getSiteMembershipRequests");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId
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
        $returnType = SiteMembershipRequestPaging::class;

        return $this->apiClient->callApi(
            '/people/{personId}/site-membership-requests', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Delete a favorite
     * Removes **favoriteId** as a favorite of person **personId**
     * @param string $personId The identifier of a person
     * @param string $favoriteId The identifier of a favorite
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function removeFavoriteSite(string $personId, string $favoriteId)
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling removeFavoriteSite");
        }
        if (empty($favoriteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'favoriteId' when calling removeFavoriteSite");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId,
            'favoriteId' => $favoriteId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/people/{personId}/favorites/{favoriteId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Cancel a site membership
     * Cancels the site membership request to site **siteId** for person **personId**
     * @param string $personId The identifier of a person
     * @param string $siteId The identifier og a site
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function removeSiteMembershipRequest(string $personId, string $siteId)
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling removeSiteMembershipRequest");
        }
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling removeSiteMembershipRequest");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId,
            'siteId' => $siteId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/people/{personId}/site-membership-requests/{siteId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Update a site membership request
     * Updates the message for the site membership request to site **siteId** for person **personId**
     * @param string $personId The identifier of a person
     * @param string $siteId The identifier of a site
     * @param SiteMembershipBody1 $siteMembershipBody1 The new message to display
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateSiteMembershipRequest(string $personId, string $siteId, SiteMembershipBody1 $siteMembershipBody1)
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling updateSiteMembershipRequest");
        }
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling updateSiteMembershipRequest");
        }
        if (empty($siteMembershipBody1)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteMembershipBody1' when calling updateSiteMembershipRequest");
        }

        $postBody = $siteMembershipBody1;
        $pathParams = [
            'personId' => $personId,
            'siteId' => $siteId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/people/{personId}/site-membership-requests/{siteId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}