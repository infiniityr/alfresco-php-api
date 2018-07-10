<?php
/**
 * Nom du fichier : CustomModelApi.php
 * Projet : alfresco-php-api
 * Date: 09/07/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;

use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class CustomModelApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * CustomModelApi constructor.
     *
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?: ApiClient::$instance;
    }

    /**
     * create Custom Model
     *
     * @param string $status
     * @param string $description
     * @param string $name
     * @param string $namespaceUri
     * @param string $namespacePrefix
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createCustomModel(string $status,string $description, string $name, string $namespaceUri, string $namespacePrefix){
        if (empty($namespaceUri)) {
            throw new \InvalidArgumentException("Missing the required parameter 'namespaceUri' when calling createCustomModel");
        }
        if (empty($namespacePrefix)) {
            throw new \InvalidArgumentException("Missing the required parameter 'namespacePrefix' when calling createCustomModel");
        }
        $postBody = [
            'status'            => $status,
            'description'       => $description,
            'name'              => $name,
            'namespaceUri'      => $namespaceUri,
            'namespacePrefix'   => $namespacePrefix,
        ];
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Create a custom type
     *
     * @param string $modelName
     * @param string $name
     * @param string $parentName
     * @param string $title
     * @param string $description
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createCustomType(string $modelName, string $name, string $parentName, string $title, string $description){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling createCustomType");
        }
        if (empty($name)) {
            throw new \InvalidArgumentException("Missing the required parameter 'name' when calling createCustomType");
        }
        $postBody = [
            'name'          => $name,
            'parentName'    =>$parentName,
            'title'         => $title,
            'description'   => $description,
        ];
        $pathParams = [
            'modelName' => $modelName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/types', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * * Create a custom aspect
     *
     * @param string $modelName
     * @param string $name
     * @param string $parentName
     * @param string $title
     * @param string $description
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createCustomAspect(string $modelName, string $name, string $parentName, string $title, string $description){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling createCustomAspect");
        }
        if (empty($name)) {
            throw new \InvalidArgumentException("Missing the required parameter 'name' when calling createCustomAspect");
        }
        $postBody = [
            'name'          => $name,
            'parentName'    =>$parentName,
            'title'         => $title,
            'description'   => $description,
        ];
        $pathParams = [
            'modelName' => $modelName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/aspects', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Create a custom constraint
     *
     * @param string $modelName
     * @param string $name
     * @param string $type
     * @param $parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createCustomConstraint(string $modelName, string $name, string $type, $parameters){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling createCustomConstraint");
        }
        if (empty($type)) {
            throw new \InvalidArgumentException("Missing the required parameter 'type' when calling createCustomConstraint");
        }
        if (empty($name)) {
            throw new \InvalidArgumentException("Missing the required parameter 'name' when calling createCustomConstraint");
        }
        $postBody = [
            'name'          => $name,
            'type'          =>$type,
            'parameters'    => $parameters,
        ];
        $pathParams = [
            'modelName' => $modelName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/constraints', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Activate the custom model
     *
     * @param string $modelName
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function activateCustomModel(string $modelName){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling activateCustomModel");
        }
        $postBody = [
            'status'    => "ACTIVE",
        ];
        $pathParams = [
            'modelName' => $modelName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}?select=status', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Add property into an existing aspect
     *
     * @param string $modelName
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deactivateCustomModel(string $modelName){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling deactivateCustomModel");
        }
        $postBody = [
            'status'    => "DRAFT",
        ];
        $pathParams = [
            'modelName' => $modelName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}?select=status', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Add property into an existing aspect
     * @param string $modelName
     * @param string $aspectName
     * @param $properties
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addPropertyToAspect(string $modelName, string $aspectName, $properties){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling addPropertyToAspect");
        }
        if (empty($aspectName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'aspectName' when calling addPropertyToAspect");
        }
        $postBody = [
            'name'          => $aspectName,
            'properties'    => $properties,
        ];
        $pathParams = [
            'modelName' => $modelName,
            'aspectName'=> $aspectName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/aspects/{aspectName}?select=props', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Add Property into an existing type
     *
     * @param string $modelName
     * @param string $typeName
     * @param $properties
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addPropertyToType(string $modelName, string $typeName, $properties){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling addPropertyToType");
        }
        if (empty($typeName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'typeName' when calling addPropertyToType");
        }
        $postBody = [
            'name'          => $typeName,
            'properties'    => $properties,
        ];
        $pathParams = [
            'modelName' => $modelName,
            'aspectName'=> $typeName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/types/{typeName}?select=props', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Edit an existing custom model
     *
     * @param string $modelName
     * @param string $description
     * @param string $namespaceUri
     * @param string $namespacePrefix
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateCustomModel(string $modelName, string $description, string $namespaceUri, string $namespacePrefix){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling updateCustomModel");
        }
        $postBody = [
            'name'          => $modelName,
            'description'   => $description,
            'namespaceUri'  => $namespaceUri,
            'namespacePrefix' => $namespacePrefix,
        ];
        $pathParams = [
            'modelName' => $modelName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Edit an existing custom model type
     *
     * @param string $modelName
     * @param string $typeName
     * @param string $description
     * @param string $parentName
     * @param string $title
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateCustomType(string $modelName, string $typeName, string $description, string $parentName, string $title){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling updateCustomType");
        }
        if (empty($typeName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'typeName' when calling updateCustomType");
        }
        $postBody = [
            'name'          => $modelName,
            'parentName'    => $parentName,
            'title'         => $title,
            'description'   => $description,
        ];
        $pathParams = [
            'modelName' => $modelName,
            'typeName'  => $typeName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/types/{typeName}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Edit an existing custom model aspect
     *
     * @param string $modelName
     * @param string $aspectName
     * @param string $description
     * @param string $parentName
     * @param string $title
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateCustomAspect(string $modelName, string $aspectName, string $description, string $parentName, string $title){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling updateCustomAspect");
        }
        if (empty($aspectName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'aspectName' when calling updateCustomAspect");
        }
        $postBody = [
            'name'          => $modelName,
            'parentName'    => $parentName,
            'title'         => $title,
            'description'   => $description,
        ];
        $pathParams = [
            'modelName' => $modelName,
            'typeName'  => $aspectName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/aspects/{aspectName}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get all custom models
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getAllCustomModel(){
        $postBody = [];
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Get custom model
     *
     * @param string $modelName
     * @param array $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getCustomModel(string $modelName, array $opts=[]){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling getCustomModel");
        }
        $postBody = [];
        $pathParams = [
            'modelName' => $modelName,
        ];
        $queryParams = $opts;
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Get all custom model types
     *
     * @param string $modelName
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getAllCustomType(string $modelName){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling getAllCustomType");
        }
        $postBody = [];
        $pathParams = [
            'modelName' => $modelName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/types', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Get custom model type
     *
     * @param string $modelName
     * @param string $typeName
     * @param array $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getCustomType(string $modelName, string $typeName, array $opts=[]){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling getCustomType");
        }
        if (empty($typeName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'typeName' when calling getCustomType");
        }
        $postBody = [];
        $pathParams = [
            'modelName' => $modelName,
            'typeName'  =>$typeName,
        ];
        $queryParams = $opts;
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/types/{typeName}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Get all custom model aspect
     *
     * @param string $modelName
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getAllCustomAspect(string $modelName){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling getAllCustomAspect");
        }
        $postBody = [];
        $pathParams = [
            'modelName' => $modelName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/aspects', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Get custom model aspect
     * @param string $modelName
     * @param string $aspectName
     * @param array $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getCustomAspect(string $modelName, string $aspectName, array $opts=[]){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling getCustomAspect");
        }
        if (empty($aspectName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'aspectName' when calling getCustomAspect");
        }
        $postBody = [];
        $pathParams = [
            'modelName' => $modelName,
            'aspectName'    =>$aspectName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/aspects/{aspectName}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Get all custom model defined constraints
     *
     * @param string $modelName
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getAllCustomConstraints(string $modelName){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling getAllCustomConstraints");
        }
        $postBody = [];
        $pathParams = [
            'modelName' => $modelName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/constraints', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Get custom model defined constraints
     *
     * @param string $modelName
     * @param string $constraintName
     * @param array $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getCustomConstraint(string $modelName, string $constraintName, array $opts=[]){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling getCustomConstraint");
        }
        if (empty($constraintName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'constraintName' when calling getCustomConstraint");
        }
        $postBody = [];
        $pathParams = [
            'modelName'         => $modelName,
            'constraintName'    => $constraintName,
        ];
        $queryParams = $opts;
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/constraints/{constraintName}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Delete the given custom model
     *
     * @param string $modelName
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteCustomModel(string $modelName){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling deleteCustomModel");
        }
        $postBody = [];
        $pathParams = [
            'modelName' => $modelName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Delete the given custom type
     *
     * @param string $modelName
     * @param string $typeName
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteCustomType(string $modelName, string $typeName){
        if (empty($modelName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'modelName' when calling deleteCustomType");
        }
        if (empty($typeName)) {
            throw new \InvalidArgumentException("Missing the required parameter 'typeName' when calling deleteCustomType");
        }
        $postBody = [];
        $pathParams = [
            'modelName' => $modelName,
            'typeName'  => $typeName,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Array';

        return $this->apiClient->callApi(
            'cmm/{modelName}/types/{typeName}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}