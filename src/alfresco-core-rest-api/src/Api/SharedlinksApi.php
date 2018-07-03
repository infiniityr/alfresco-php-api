<?php
/**
 * Nom du fichier : SharedlinksApi.php
 * Projet : alfresco-php-api
 * Date : 21/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\EmailSharedLinkBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeSharedLinkEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeSharedLinkPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SharedLinkBody;

class SharedlinksApi
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
     * Create a shared link to a file
     * Create shared link to specified file identified by **nodeId** in request body.
     * @param SharedLinkBody $sharedLinkBody The nodeId to create a shared link for.
     * @param array $opts Optional parameters.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addSharedLink(SharedLinkBody $sharedLinkBody, array $opts = [])
    {
        if (empty($sharedLinkBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'sharedLinkBody' when calling addSharedBody");
        }

        $postBody = $sharedLinkBody;
        $pathParams = [];
        $queryParams = [
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeSharedLinkEntry::class;

        return $this->apiClient->callApi(
            '/shared-links', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Deletes a shared link
     * Deletes the shared link with identifier **sharedId**
     * @param string $shareId The identifier of a shared link to a file.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteSharedLink(string $shareId)
    {
        if (empty($shareId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'shareId' when calling deleteSharedLink");
        }

        $postBody = null;
        $pathParams = [
            'sharedId' => $shareId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/shared-links/{sharedId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Email shared link
     * Sends email with app-specific url including identifier **sharedId**.\n\nThe client and recipientEmails properties are mandatory in the request body. For example, to email a shared link with minimum info:\n&#x60;&#x60;&#x60;JSON\n{\n    \&quot;client\&quot;: \&quot;myClient\&quot;,\n    \&quot;recipientEmails\&quot;: [\&quot;john.doe@acme.com\&quot;, joe.bloggs@acme.com]\n}\n&#x60;&#x60;&#x60;\nA plain text message property can be optionally provided in the request body to customise the sent email.\nAlso, a locale property can be optionally provided in the request body to send the emails in a particular language.\nFor example, to email a shared link with a messages and a locale:\n&#x60;&#x60;&#x60;JSON\n{\n    \&quot;client\&quot;: \&quot;myClient\&quot;,\n    \&quot;recipientEmails\&quot;: [\&quot;john.doe@acme.com\&quot;, joe.bloggs@acme.com],\n    \&quot;message\&quot;: \&quot;myMessage\&quot;,\n    \&quot;locale\&quot;:\&quot;en-GB\&quot;\n}\n&#x60;&#x60;&#x60;\n**Note:** The client must be registered before you can send a shared link email. See [server documentation]\n
     * @param string $sharedId The identifier of a shared link to a file.
     * @param EmailSharedLinkBody $emailSharedLinkBody The shared link email to send.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function emailSharedLink(string $sharedId, EmailSharedLinkBody $emailSharedLinkBody)
    {
        if (empty($sharedId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'sharedId' when calling emailSharedLink");
        }

        $postBody = $emailSharedLinkBody;
        $pathParams = [
            'sharedId' => $sharedId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/shared-links/{sharedId}/email', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Find shared links
     * Find (search for) links that current user has read permission on source node.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function findSharedLinks(array $opts = [])
    {
        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'where' => $opts['where']?:'',
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeSharedLinkPaging::class;

        return $this->apiClient->callApi(
            '/shared-links', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a shared link
     * Returns minimal information for the file with shared link identifier **sharedId**.\n\n**Note:** No authentication is required to call this endpoint.\n
     * @param string $sharedId The identifier of a shared link to a file.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSharedLink(string $sharedId, array $opts = [])
    {
        if (empty($sharedId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'sharedId' when calling getSharedLink");
        }

        $postBody = null;
        $pathParams = [
            'sharedId' => $sharedId
        ];
        $queryParams = [
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeSharedLinkEntry::class;

        return $this->apiClient->callApi(
            '/shared-links/{sharedId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get file content
     * Returns the content of the file with shared link identifier **sharedId**.\n\n**Note:** No authentication is required to call this endpoint.\n
     * @param string $sharedId The identifier of a shared link to a file.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSharedLinkContent(string $sharedId, array $opts = [])
    {
        if (empty($sharedId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'sharedId' when calling getSharedLinkContent");
        }

        $postBody = null;
        $pathParams = [
            'sharedId' => $sharedId
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
            '/shared-links/{sharedId}/content', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}