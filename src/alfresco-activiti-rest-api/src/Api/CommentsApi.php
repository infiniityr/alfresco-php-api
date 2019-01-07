<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 30/09/2018
 * Time: 01:08
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Api;


use AlfPHPApi\AlfrescoActivitiRestApi\Model\CommentRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\ResultListDataRepresentation;
use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class CommentsApi
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
     * @param CommentRepresentation $commentRequest
     * @param string                $processInstanceId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addProcessInstanceComment(CommentRepresentation $commentRequest, string $processInstanceId){
        if (empty($commentRequest)) {
            throw new \InvalidArgumentException("Missing the required parameter 'commentRequest' when calling addProcessInstanceComment");
        }
        if (empty($processInstanceId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'processInstanceId' when calling addProcessInstanceComment");
        }
        $postBody = $commentRequest;
        $pathParams = [
            'processInstanceId' => $processInstanceId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = CommentRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/process-instances/{processInstanceId}/comments', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param CommentRepresentation $commentRequest
     * @param string                $taskId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addTaskComment(CommentRepresentation $commentRequest, string $taskId){
        if (empty($commentRequest)) {
            throw new \InvalidArgumentException("Missing the required parameter 'commentRequest' when calling addTaskComment");
        }
        if (empty($taskId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'taskId' when calling addTaskComment");
        }
        $postBody = $commentRequest;
        $pathParams = [
            'taskId' => $taskId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = CommentRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/tasks/{taskId}/comments', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param string     $processInstanceId
     * @param array|null $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getProcessInstanceComments(string $processInstanceId, array $opts = null){
        if (empty($processInstanceId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'processInstanceId' when calling getProcessInstanceComments");
        }
        $postBody = null;
        $pathParams = [
            'processInstanceId' => $processInstanceId
        ];
        $queryParams = array_merge(['latestFirst' => ''], $opts);
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ResultListDataRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/process-instances/{processInstanceId}/comments', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param string     $taskId
     * @param array|null $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getTaskComments(string $taskId, array $opts = null){
        if (empty($taskId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'taskId' when calling getTaskComments");
        }
        $postBody = null;
        $pathParams = [
            'taskId' => $taskId
        ];
        $queryParams = array_merge(['latestFirst' => ''], $opts);
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ResultListDataRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/tasks/{taskId}/comments', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}