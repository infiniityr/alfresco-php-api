<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 30/09/2018
 * Time: 00:33
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Api;


use AlfPHPApi\AlfrescoActivitiRestApi\Model\AppDefinitionPublishRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\AppDefinitionRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\AppDefinitionUpdateResultRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\File;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\ResultListDataRepresentation;
use AlfPHPApi\AlfrescoActivitiRestApi\Model\RuntimeAppDefinitionSaveRepresentation;
use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class AppsApi
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
     * @param RuntimeAppDefinitionSaveRepresentation $saveObject
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deployAppDefinitions(RuntimeAppDefinitionSaveRepresentation $saveObject){
        if (empty($saveObject)) {
            throw new \InvalidArgumentException("Missing the required parameter 'saveObject' when calling deployAppDefinitions");
        }
        $postBody = $saveObject;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/runtime-app-definitions', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int $modelId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function exportAppDefinition(int $modelId){
        if (empty($modelId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelId' when calling exportAppDefinition");
        }
        $postBody = null;
        $pathParams = [
            'modelId' => $modelId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/api/enterprise/app-definitions/{modelId}/export', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getAppDefinitions(){
        $postBody = null;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ResultListDataRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/runtime-app-definitions', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param File     $file
     *
     * @param int|null $modelId
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function importAppDefinition(File $file, int $modelId = null){
        if (empty($file)) {
            throw new \InvalidArgumentException("Missing the required parameter 'file' when calling importAppDefinition");
        }
        $postBody = null;
        $pathParams = empty($modelId)?[]:['modelId' => $modelId];
        $queryParams = [];
        $headerParams = [];
        $formParams = [
            'file' => $file
        ];
        $authNames = [];
        $contentTypes = ['multipart/form-data'];
        $accepts = ['application/json'];
        $returnType = AppDefinitionRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/app-definitions' . (empty($modelId)?'':'/{modelId}') .'/import', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * @param int                                $modelId
     * @param AppDefinitionPublishRepresentation $publishModel
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function publishAppDefinition(int $modelId, AppDefinitionPublishRepresentation $publishModel){
        if (empty($modelId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelId' when calling publishAppDefinition");
        }
        if (empty($publishModel)) {
            throw new \InvalidArgumentException("Missing the required parameter 'publishModel' when calling publishAppDefinition");
        }
        $postBody = $publishModel;
        $pathParams = [
            'modelId' => $modelId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = AppDefinitionUpdateResultRepresentation::class;

        return $this->apiClient->callApi(
            '/api/enterprise/app-definitions/{modelId}/publish', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}