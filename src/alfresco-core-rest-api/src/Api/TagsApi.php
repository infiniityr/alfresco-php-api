<?php
/**
 * Nom du fichier : TagsApi.php
 * Projet : alfresco-php-api
 * Date : 18/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\TagBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\TagBody1;
use AlfPHPApi\AlfrescoCoreRestApi\Model\TagEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\TagPaging;

class TagsApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * TagsApi constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient?:ApiClient::$instance;
    }

    /**
     * Add a tag
     *
     * @param string $nodeId The identifier of a node.
     * @param TagBody $tagBody The new tag
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addTag(string $nodeId, TagBody $tagBody)
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling addTag");
        }
        if (empty($tagBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tagBody' when calling addTag");
        }

        $postBody = $tagBody;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = TagEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/tags', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get tags
     * Returns a list of tags for node **nodeId**
     * @param string $nodeId The identifier of a node.
     * @param array $opts Optional parameters<br/>
     *      <ol><li><code>string[]</code> fields : A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.</li>
     *      <li><code>int</code> skipCount : The number of entities that exist in the collection before those included in this list. If not supplied then the default value is 0.  (default to 0)</li>
     *      <li><code>int</code> maxItems : The maximum number of items to return in the list. If not supplied then the default value is 100.  (default to 100)</li></ol>
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getNodeTags(string $nodeId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling addTag");
        }
        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'fields' => $this->apiClient->buildCollectionParam(key_exists('fields', $opts)?$opts['fields']:null, 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = TagPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/tags', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a tag
     * Return a specific tag with **tagId**
     *
     * @param string $tagId The identifier of a tag.
     * @param array $opts Optional parameters.
     *      <ol><li><code>string[]</code> fields : A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.</li></ol>
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getTag(string $tagId, array $opts = [])
    {
        if (empty($tagId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling addTag");
        }
        $postBody = null;
        $pathParams = [
            'tagId' => $tagId
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam(key_exists('fields', $opts)?$opts['fields']:null, 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = TagEntry::class;

        return $this->apiClient->callApi(
            '/tags/{tagId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get tags
     * Returns a list of tags in this repository.
     *
     * @param array $opts Optional parameters
     *      <ol><li><code>string[]</code> fields : A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.</li>
     *      <li><code>int</code> skipCount : The number of entities that exist in the collection before those included in this list. If not supplied then the default value is 0.  (default to 0)</li>
     *      <li><code>int</code> maxItems : The maximum number of items to return in the list. If not supplied then the default value is 100.  (default to 100)</li></ol>
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getTags(array $opts = [])
    {
        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'fields' => $this->apiClient->buildCollectionParam(key_exists('fields', $opts)?$opts['fields']:null, 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = TagPaging::class;

        return $this->apiClient->callApi(
            '/tags', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Delete a tag
     * Removes a tag **tagId** from node **nodeId**
     * @param string $nodeId The identifier of a node
     * @param string $tagId The identifier of a tag
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function removeTag(string $nodeId, string $tagId)
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling addTag");
        }
        if (empty($tagId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tagBody' when calling addTag");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
            'tagId' => $tagId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/tags/{tagId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Update a tag
     * Updates the tag **tagId**
     * @param string $tagId The identifier of a tag
     * @param TagBody1 $tagBody The updated tag
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateTag(string $tagId, TagBody1 $tagBody)
    {
        if (empty($tagId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling addTag");
        }
        if (empty($tagBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'tagBody' when calling addTag");
        }

        $postBody = $tagBody;
        $pathParams = [
            'tagId' => $tagId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = TagEntry::class;

        return $this->apiClient->callApi(
            '/tags/{tagId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}