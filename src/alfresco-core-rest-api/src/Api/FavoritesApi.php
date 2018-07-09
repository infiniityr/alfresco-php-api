<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 08/07/2018
 * Time: 22:44
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\FavoriteBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\FavoriteEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\FavoritePaging;

class FavoritesApi
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
     * Add a favorite
     * Favorite a **site**, **file**, or **folder** in the repository.
     *
     * @param string       $personId     The identifier of a person.
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
            'personId' => $personId,
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
     * Get a favorite
     * Returns favorite **favoriteId** for person **personId**
     *
     * @param string $personId   The identifier of a person
     * @param string $favoriteId The identifier of a favorite
     * @param array  $opts       Optional parameters
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
            'personId'   => $personId,
            'favoriteId' => $favoriteId,
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
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
     * Get favorites
     * Returns a list of favorites for person **personId**.\n\nYou can us the &#x60;-me-&#x60; string in place of &#x60;&lt;personId&gt;&#x60; to get the favorites of the currently authenticated user.\n\nYou can use the **where** parameter to restrict the list in the response\nto entries of a specific kind. The **where** parameter takes a value.\nThe value is a single predicate that can include one or more **EXISTS**\nconditions. The **EXISTS** condition uses a single operand to limit the\nlist to include entries that include that one property. The property values are:\n\n*   &#x60;target/file&#x60;\n*   &#x60;target/folder&#x60;\n*   &#x60;target/site&#x60;\n\nFor example, the following **where** parameter restricts the returned list to the file favorites for a person:\n\n&#x60;&#x60;&#x60;SQL\n(EXISTS(target/file))\n&#x60;&#x60;&#x60;\nYou can specify more than one condition using **OR**. The predicate must be enclosed in parentheses.\n\n\nFor example, the following **where** parameter restricts the returned list to the file and folder favorites for a person:\n\n&#x60;&#x60;&#x60;SQL\n(EXISTS(target/file) OR EXISTS(target/folder))\n&#x60;&#x60;&#x60;\n
     *
     * @param string $personId The identifier of a person
     * @param array  $opts     Optional parameters
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
            'personId' => $personId,
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount'] ?: 0,
            'maxItems'  => $opts['maxItems'] ?: 100,
            'where'     => $opts['where'] ?: '',
            'fields'    => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
            'include'   => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
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
     * Delete a favorite
     * Removes **favoriteId** as a favorite of person **personId**
     *
     * @param string $personId   The identifier of a person
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
            'personId'   => $personId,
            'favoriteId' => $favoriteId,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = FavoriteEntry::class;

        return $this->apiClient->callApi(
            '/people/{personId}/favorites/{favoriteId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}