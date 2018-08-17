<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 09/07/2018
 * Time: 21:53
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\DownloadBodyCreate;
use AlfPHPApi\AlfrescoCoreRestApi\Model\DownloadEntry;

class DownloadsApi
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
     * Cancel a download
     * **Note:** this endpoint is available in Alfresco 5.2.1 and newer versions.  Cancels the creation of a download request.  **Note:** The download node can be deleted using the **DELETE /nodes/{downloadId}** endpoint   By default, if the download node is not deleted it will be picked up by a cleaner job which removes download nodes older than a configurable amount of time (default is 1 hour)  Information about the existing progress at the time of cancelling can be retrieved by calling the **GET /downloads/{downloadId}** endpoint  The cancel operation is done asynchronously.
     *
     * @param string   $downloadId The identifier of a download node.
     * @param callable $callback   The callback function, accepting three arguments: error, data, response
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function cancelDownload(string $downloadId, callable $callback = null)
    {
        if (empty($downloadId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'downloadId' when calling cancelDownload");
        }

        $postBody = null;
        $pathParams = [
            'downloadId' => $downloadId,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/downloads/{downloadId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        )->then($callback);
    }

    /**
     * Create a new download
     * **Note:** this endpoint is available in Alfresco 5.2.1 and newer versions.  Creates a new download node asynchronously, the content of which will be the zipped content of the **nodeIds** specified in the JSON body like this:  &#x60;&#x60;&#x60;JSON {     \&quot;nodeIds\&quot;:      [        \&quot;c8bb482a-ff3c-4704-a3a3-de1c83ccd84c\&quot;,        \&quot;cffa62db-aa01-493d-9594-058bc058eeb1\&quot;      ] } &#x60;&#x60;&#x60;  **Note:** The content of the download node can be obtained using the **GET /nodes/{downloadId}/content** endpoint
     *
     * @param DownloadBodyCreate $downloadBodyCreate The nodeIds the content of which will be zipped, which zip will be set as the content of our download node.
     * @param array              $opts               Optional parameters
     * @param callable|null      $callback           The callback function, accepting three arguments: error, data, response
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createDownload(DownloadBodyCreate $downloadBodyCreate, array $opts = [], callable $callback = null)
    {
        if (empty($downloadBodyCreate)) {
            throw new \InvalidArgumentException("Missing the required parameter 'downloadBodyCreate' when calling createDownload");
        }

        $postBody = $downloadBodyCreate;
        $pathParams = [];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = DownloadEntry::class;

        return $this->apiClient->callApi(
            '/downloads', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        )->then($callback);
    }

    /**
     * Get a download
     * **Note:** this endpoint is available in Alfresco 5.2.1 and newer versions.  Retrieve status information for download node **downloadId**
     *
     * @param string        $downloadId The identifier of a download node.
     * @param array         $opts       Optional parameters
     * @param callable|null $callback   The callback function, accepting three arguments: error, data, response
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getDownload(string $downloadId, array $opts = [], callable $callback = null)
    {
        if (empty($downloadId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'downloadId' when calling getDownload");
        }

        $postBody = null;
        $pathParams = [
            'downloadId' => $downloadId,
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = DownloadEntry::class;

        return $this->apiClient->callApi(
            '/downloads/{downloadId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        )->then($callback);
    }
}