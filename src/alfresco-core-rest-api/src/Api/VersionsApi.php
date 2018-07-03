<?php
/**
 * Nom du fichier : VersionsApi.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\RevertBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\VersionEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\VersionPaging;

class VersionsApi
{
    /**
     * @var ApiClient
     */
    public $apiClient;

    /**
     * VersionsApi constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient?:ApiClient::$instance;
    }

    /**
     * Delete a version
     *
     * @param string $nodeId The identifier of a node
     * @param string $versionId The identifier of a version, ie. version label, within the version history of a node.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *      A Promise with an object containing a HTTP response.
     * @throws \Exception
     */
    public function deleteVersion(string $nodeId, string $versionId)
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling deleteVersion");
        }
        if (empty($versionId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'versionId' when calling deleteVersion");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
            'versionId' => $versionId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/versions/{versionId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get version information
     *
     * @param string $nodeId The identifier of a node.
     * @param string $versionId The identifier of a version, ie. version label, within the version history of a node.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *      A Promise with an object containing data of type {@link AlfPHPApi\AlfrescoCoreRestApi\Model\VersionEntry} and HTTP response 
     * @throws \Exception
     */
    public function getVersion(string $nodeId, string $versionId)
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getVersion");
        }
        if (empty($versionId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'versionId' when calling getVersion");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
            'versionId' => $versionId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = VersionEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/versions/{versionId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get version content
     *
     * @param string $nodeId The identifier of a node.
     * @param string $versionId The identifier of a version, ie. version label, within the version history of a node.
     * @param array $opts Optional parameters<br/>
     *      <ol><li><code>bool</code> attachment : **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response.  (default to true)</li>
     *      <li><code>DateTime</code> ifModifiedSince : Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, &#x60;Wed, 09 Mar 2016 16:56:34 GMT&#x60;.</li>
     *      <li><code>string</code> range : The Range header indicates the part of a document that the server should return. Single part request supported, for example: bytes&#x3D;1-10.</li></ol>
     * @return \GuzzleHttp\Promise\PromiseInterface
     *      A Promise with an object containing a HTTP response. 
     * @throws \Exception
     */
    public function getVersionContent(string $nodeId, string $versionId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getVersionContent");
        }
        if (empty($versionId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'versionId' when calling getVersionContent");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
            'versionId' => $versionId
        ];
        $queryParams = [
            'attachment' => $this->apiClient->buildCollectionParam(key_exists('attachment', $opts)?$opts['attachment']:null, 'csv')
        ];
        $headerParams = [
            'If-Modified-Since' => key_exists('ifModifiedSince', $opts)?$opts['ifModifiedSince']:null,
            'Range' => key_exists('range', $opts)?$opts['range']:null
        ];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/versions/{versionId}/content', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * List version history
     *
     * @param string $nodeId The identifier node.
     * @param array $opts Optional parameters<br/>
     *      <ol><li><code>string[]</code> include : Returns additional information about the version node. The following optional fields can be requested: * properties * aspectNames</li>
     *      <li><code>string[]</code> fields : A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.</li>
     *      <li><code>int</code> skipCount : The number of entities that exist in the collection before those included in this list. If not supplied then the default value is 0.  (default to 0)</li>
     *      <li><code>int</code> maxItems : The maximum number of items to return in the list. If not supplied then the default value is 100.  (default to 100)</li></ol>
     * 
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function listVersionHistory($nodeId, $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling listVersionHistory");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = VersionPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/versions', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Revert a version
     *
     * @param string $nodeId The identifier of a node
     * @param string $versionId The identifier of a version, ie. version label, within the version history of a node.
     * @param RevertBody $revertBody Optionally, specify a version comment and whether this should be a major version, or not.
     * @param array $opts Optional parameters.<br/>
     *      <ol><li><code>string[]</code> fields: A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.</li></ol>
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     *      A Promise, with an object containing data of type VersionEntry and HTTP response
     * @throws \Exception
     */
    public function revertVersion($nodeId, $versionId, $revertBody, $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling revertVersion");
        }
        if (empty($versionId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'versionId' when calling revertVersion");
        }
        if (empty($revertBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'revertBody' when calling revertVersion");
        }

        $postBody = $revertBody;
        $pathParams = [
            'nodeId' => $nodeId,
            'versionId' => $versionId
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = VersionEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/versions/{versionId}/revert', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}