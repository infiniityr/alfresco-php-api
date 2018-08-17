<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 11:47
 */

namespace AlfPHPApi;


use AlfPHPApi\AlfrescoCoreRestApi\Api\NodesApi;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeEntry;

class AlfrescoUpload extends NodesApi
{
    public function uploadFile(\SplFileObject $fileDefinition, $relativePath, $nodeId = '-root-', $nodeBody = [], $opts = []) {
        $nodeBody = array_merge([
            'name' => $fileDefinition->getFilename(),
            'nodeType' => 'cm:content',
            'relativePath' => $relativePath
        ], $nodeBody);

        $formParam = array_merge([
            'filedata' => $fileDefinition,
            'relativePath' => $relativePath
        ], $opts);

        return $this->addNodeUpload($nodeId, $nodeBody, $opts, $formParam);
    }

    public function addNodeUpload($nodeId, $nodeBody, $opts = [], $formParams = []) {
        $headerParams = [];
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter nodeId when calling uploadFile");
        }
        if (empty($nodeBody)) {
            throw new \InvalidArgumentException("Missing the required parameter nodeBody when calling uploadFile");
        }
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'autoRename' => $opts['autoRename'],
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $authNames = ['basicAuth'];
        $contentTypes = ['multipart/form-data'];
        $accepts = ['application/json'];
        $returnType = NodeEntry::class;

        return $this->apiClient->callApi('/nodes/{nodeId}/children', 'POST', $pathParams, $queryParams,
            $headerParams, $formParams, $nodeBody, $authNames, $contentTypes, $accepts, $returnType);
    }
}