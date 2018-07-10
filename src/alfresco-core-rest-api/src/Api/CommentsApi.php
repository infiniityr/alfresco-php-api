<?php
/**
 * Nom du fichier : CommentsApi.php
 * Projet : alfresco-php-api
 * Date: 10/07/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;

use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\CommentBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\CommentEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\CommentPaging;

class CommentsApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * CommentsApi constructor.
     *
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?: ApiClient::$instance;
    }


    /**
     * Add a comment
     * Creates one or more comments on node **nodeId**. You can create more than one comment by \nspecifying a list of comments in the JSON body like this:      \n\n&#x60;&#x60;&#x60;JSON\n[\n  {\n    \&quot;content\&quot;: \&quot;This is a comment\&quot;\n  },\n  {\n    \&quot;content\&quot;: \&quot;This is another comment\&quot;\n  }\n]\n&#x60;&#x60;&#x60;\n
     *
     * @param string $nodeId The identifier of a node.
     * @param CommentBody $commentBody The comment text. Note that you can provide an array of comments.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addComment(string $nodeId, CommentBody $commentBody, array $opts=[]){
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling addComment");
        }
        if (empty($commentBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'commentBody' when calling addComment");
        }
        $postBody = $commentBody;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'fields'     => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = CommentEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/comments', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Get comments
     * Returns a list of comments for the node identified by **nodeId**, sorted chronologically with the newest comment first.
     *
     * @param string $nodeId The identifier of a node.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getComments(string $nodeId, array $opts=[]){
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getComments");
        }
        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'skipCount' => opts['skipCount'],
            'maxItems'  => opts['maxItems'],
            'fields'    => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = CommentPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/comments', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Delete a comment
     * Removes the comment **commentId** from node **nodeId**.
     *
     * @param string $nodeId The identifier of a node.
     * @param string $commentId The identifier of a comment.
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function removeComment(string $nodeId, string $commentId){
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling removeComment");
        }
        if (empty($commentId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'commentId' when calling removeComment");
        }
        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
            'commentId' => $commentId,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/comments/{commentId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Update a comment
     * Updates an existing comment **commentId** on node **nodeId**.
     *
     * @param string $nodeId The identifier of a node.
     * @param string $commentId The identifier of a comment.
     * @param CommentBody $commentBody The JSON representing the comment to be updated.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateComment(string $nodeId, string $commentId, CommentBody $commentBody, array $opts=[]){
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling updateComment");
        }
        if (empty($commentId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'commentId' when calling updateComment");
        }
        if (empty($commentBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'commentBody' when calling updateComment");
        }
        $postBody = $commentBody;
        $pathParams = [
            'nodeId' => $nodeId,
            'commentId' => $commentId,
        ];
        $queryParams = [
            'fields'     => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = CommentEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/comments/{commentId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}