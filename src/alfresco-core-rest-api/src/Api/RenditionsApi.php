<?php
/**
 * Nom du fichier : RenditionsApi.php
 * Projet : alfresco-php-api
 * Date : 21/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\RenditionBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\RenditionEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\RenditionPaging;

class RenditionsApi
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
     * Create rendition
     * Async request to create a rendition for file with identifier\n**nodeId**. The rendition is specified by name \&quot;id\&quot; in the request body:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;id\&quot;:\&quot;doclib\&quot;\n}\n&#x60;&#x60;&#x60;\n
     * @param string $nodeId The identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param RenditionBody $renditionBody The rendition **id**
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createRendition(string $nodeId, RenditionBody $renditionBody)
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling createRendition");
        }
        if (empty($renditionBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'renditionBody' when calling createRendition");
        }

        $postBody = $renditionBody;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/renditions', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get rendition information
     * Returns the rendition information for file node with identifier **nodeId**
     * @param string $nodeId The identifier of a node.
     * @param string $renditionId The name of a thumbnail rendition, for example *doclib*, or *pdf*
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getRendition(string $nodeId, string $renditionId)
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getRendition");
        }
        if (empty($renditionId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'renditionId' when calling getRendition");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
            'renditionId' => $renditionId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = RenditionEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/renditions/{renditinoId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * get rendition content
     * Return the rendition content for file node with identifier **nodeId**
     * @param string $nodeId The identifier of a node
     * @param string $renditionId The name of a thumbnail rendition, for example *doclib*, or *pdf*
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getRenditionContent(string $nodeId, string $renditionId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getRenditionContent");
        }
        if (empty($renditionId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'renditionId' when calling getRenditionContent");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
            'renditionId' => $renditionId
        ];
        $queryParams = [
            'attachment' => isset($opts['attachment'])?$opts['attachment']:true
        ];
        $headerParams = [
            'If-Modified-Since' => $opts['ifModifiedSince']
        ];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/renditions/{renditinoId}/content', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * List information for renditions
     * Returns the rendition information for the file node with identifier **nodeId**.\nThis will return rendition information, including the rendition id, for each rendition. The\u00A0rendition status is CREATED (ie. available\u00A0to view/download) or NOT_CREATED (ie. rendition can be requested).
     * @param string $nodeId The identifier of a node.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getRenditions(string $nodeId)
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getRenditions");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = RenditionPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/renditions', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get shared link rendition content
     * Returns the rendition content for file with shared link identifier **sharedId**.\n\n**Note:** No authentication is required to call this endpoint.\n
     * @param string $sharedId The identifier of a shared link to a file.
     * @param string $renditionId The name of a thumbnail rendition, for example *doclib*, or *pdf*.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSharedLinkRenditionContent(string $sharedId, string $renditionId, $opts = [])
    {
        if (empty($sharedId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'sharedId' when calling getSharedLinkRenditionContent");
        }
        if (empty($renditionId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'renditionId' when calling getSharedLinkRenditionContent");
        }

        $postBody = null;
        $pathParams = [
            'sharedId' => $sharedId,
            'renditionId' => $renditionId
        ];
        $queryParams = [
            'attachment' => isset($opts['attachment'])?$opts['attachment']:true
        ];
        $headerParams = [
            'If-Modified-Since' => $opts['ifModifiedSince']
        ];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/shared-links/{sharedId}/renditions/{renditionId}/content', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * List information for created renditions
     * Returns the rendition information for the file with shared link identifier **sharedId**.\n\nThis will only return rendition information, including the rendition id, for each rendition\nwhere the rendition status is CREATED (ie. available\u00A0to view/download).\n\n**Note:** No authentication is required to call this endpoint.      \n
     * @param string $sharedId The identifier of a shared link to a file.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSharedLinkRenditions(string $sharedId)
    {
        if (empty($sharedId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'sharedId' when calling getSharedLinkRenditions");
        }

        $postBody = null;
        $pathParams = [
            'sharedId' => $sharedId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = RenditionPaging::class;

        return $this->apiClient->callApi(
            '/shared-links/{sharedId}/renditions', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Gets rendition information for the file with shared link identifier sharedId.
     * @param string $sharedId The identifier of a shared link to a file.
     * @param string $renditionId The name of a thumbnail rendition, for example *doclib*, or *pdf*
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSharedLinkRendition(string $sharedId, string $renditionId)
    {
        if (empty($sharedId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'sharedId' when calling getSharedLinkRendition");
        }
        if (empty($renditionId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'renditionId' when calling getSharedLinkRendition");
        }

        $postBody = null;
        $pathParams = [
            'sharedId' => $sharedId,
            'renditionId' => $renditionId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = RenditionEntry::class;

        return $this->apiClient->callApi(
            '/shared-links/{sharedId}/renditions', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}