<?php
/**
 * Nom du fichier : AssociationsApi.php
 * Projet : alfresco-php-api
 * Date: 11/07/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;

use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\AssocTargetBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeAssocPaging;

class AssociationsApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * AssociationsApi constructor.
     *
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?: ApiClient::$instance;
    }


    /**
     * Add node association
     * Add association, with given association type, between source and target node.\n
     *
     * @param string $sourceId The identifier of a node.
     * @param AssocTargetBody $assocTargetBody The target node id and assoc type.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addAssoc(string $sourceId, AssocTargetBody $assocTargetBody){
        if (empty($sourceId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'sourceId' when calling addAssoc");
        }
        if (empty($assocTargetBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'assocTargetBody' when calling addAssoc");
        }
        $postBody = $assocTargetBody;
        $pathParams = [
            'sourceId' => $sourceId,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{sourceId}/targets', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * List node associations
     * Returns a list of source nodes that point to (ie. are associated with) the current target node.\n
     *
     * @param string $targetId The identifier of a node.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function listSourceNodeAssociations(string $targetId, array $opts=[]){
        $opts = array_merge([
            'where' => '',
            'include' => '',
            'fields' => []
        ], $opts);
        if (empty($targetId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'targetId' when calling listSourceNodeAssociations");
        }
        $postBody = null;
        $pathParams = [
            'targetId' => $targetId,
        ];
        $queryParams = [
            'where' => $opts['where'],
            'include'    => $opts['include'],
            'fields'     => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeAssocPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{targetId}/sources', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * List node associations
     * Returns a list of target nodes that are pointed to (ie. are associated with) the current source node.\n
     *
     * @param string $sourceId The identifier of a node.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function listTargetAssociations(string $sourceId, array $opts=[]){
        $opts = array_merge([
            'where' => '',
            'include' => '',
            'fields' => []
        ], $opts);
        if (empty($sourceId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'sourceId' when calling listTargetAssociations");
        }

        $postBody = null;
        $pathParams = [
            'sourceId' => $sourceId,
        ];
        $queryParams = [
            'where' => $opts['where'],
            'include'    => $opts['include'],
            'fields'     => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeAssocPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{sourceId}/targets', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Remove node association(s)
     * Remove association(s) between source and target node for given association type. \n\nIf association type is not specified then all associations between source and target are removed.\n
     *
     * @param string $sourceId The identifier of a node.
     * @param string $targetId The identifier of a node.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function removeAssoc(string $sourceId, string $targetId, array $opts=[]){
        $opts = array_merge([
            'assocType' => ''
        ], $opts);
        if (empty($sourceId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'sourceId' when calling removeAssoc");
        }
        if (empty($targetId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'targetId' when calling removeAssoc");
        }

        $postBody = null;
        $pathParams = [
            'sourceId' => $sourceId,
            'targetId' => $targetId,
        ];
        $queryParams = [
            'assocType' => $opts['assocType'],
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{sourceId}/targets/{targetId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


}