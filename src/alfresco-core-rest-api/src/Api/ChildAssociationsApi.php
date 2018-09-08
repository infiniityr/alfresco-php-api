<?php
/**
 * Nom du fichier : NodesApi.php
 * Projet : alfresco-php-api
 * Date: 11/07/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;

use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\AssocChildBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\MoveBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeAssocPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeChildAssocPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodePaging;


class ChildAssociationsApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * ChildAssociationApi constructor.
     *
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?: ApiClient::$instance;
    }


    /**
     * Create a node
     * Creates a node as a (primary) child of the node with identifier **nodeId**.\n\nYou must specify at least a **name** and **nodeType**. For example, to create a folder:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My Folder\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:folder\&quot;\n}\n&#x60;&#x60;&#x60;\n\nYou can create an empty file like this:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My text file.txt\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:content\&quot;,\n  \&quot;content\&quot;:\n   {\n     \&quot;mimeType\&quot;:\&quot;text/plain\&quot;\n   }\n}\n&#x60;&#x60;&#x60;\nYou can update binary content using the &#x60;&#x60;&#x60;PUT /nodes/{nodeId}&#x60;&#x60;&#x60; API method.\n\nYou can create a folder, or other node, inside a folder hierarchy:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My Special Folder\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:folder\&quot;,\n  \&quot;relativePath\&quot;:\&quot;X/Y/Z\&quot;\n}\n&#x60;&#x60;&#x60;\nThe **relativePath** specifies the folder structure to create relative to the node identified by  **nodeId**. Folders in the\n**relativePath** that do not exist are created before the node is created.\n\nYou can set properties when you create a new node:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My Other Folder\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:folder\&quot;,\n  \&quot;properties\&quot;:\n    {\n      \&quot;cm:title\&quot;:\&quot;Folder title\&quot;,\n      \&quot;cm:description\&quot;:\&quot;This is an important folder\&quot;\n    }\n}\n&#x60;&#x60;&#x60;\nAny missing aspects are auto-applied. For example, **cm:titled** in the JSON shown above. You can set aspects\nexplicitly set, if needed, using an **aspectNames** field.\n\nThis API method also supports file upload using multipart/form-data.\n\nUse the **filedata** field to represent the content to upload.\nYou can use a **filename** field to give an alternative name for the new file.\n\nUse **overwrite** to overwrite an existing file, matched by name. If the file is versionable,\nthe existing content is replaced.\n\nWhen you overwrite overwrite existing content, you can set the **majorVersion** boolean field to **true** to indicate a major version\nshould be created. The default for **majorVersion** is **false**.\nSetting  **majorVersion** enables versioning of the node, if it is not already versioned.\n\nWhen you overwrite overwrite existing content, you can use the **comment** field to add a version comment that appears in the\nversion history. This also enables versioning of this node, if it is not already versioned.\n\nYou can set the **autoRename** boolean field to automatically resolve name clashes. If there is a name clash, then\nthe API method tries to create\na unique name using an integer suffix.\n\nAny field in the JSON body defined below can also be passed as a form-data field.\n
     *
     * @param string $nodeId The identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param NodeBody $nodeBody The node information to create.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addNode(string $nodeId, NodeBody $nodeBody, array $opts=[]){
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling addNode");
        }
        if (empty($nodeBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeBody' when calling addNode");
        }
        $opts = array_merge(['autoRename' => false,
                             'include' => [],
                             'fields' => []], $opts);
        $postBody = $nodeBody;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'autoRename' => $opts['autoRename'],
            'include'    => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields'     => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/children', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Add secondary child
     * Add secondary child association, with given association type, between parent and child node.\n
     *
     * @param string $parentId The identifier of a node.
     * @param AssocChildBody $assocChildBody The child node id and assoc type.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addSecondaryChildAssoc(string $parentId, AssocChildBody $assocChildBody){
        if (empty($parentId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'parentId' when calling addSecondaryChildAssoc");
        }
        if (empty($assocChildBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'assocChildBody' when calling addSecondaryChildAssoc");
        }
        $postBody = $assocChildBody;
        $pathParams = [
            'parentId' => $parentId,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{parentId}/secondary-children', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Delete a node
     * Deletes the node with identifier **nodeId**.\nIf the **nodeId** is a folder, then its children are also deleted.\nDeleted nodes move to the trashcan unless the **permanent** query parameter is true, and the current user is the owner or an admin.\n\nDeleting a node removes the child associations, ie. both primary and also secondary, if any.\n
     *
     * @param string $nodeId The identifier of a node.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteNode(string $nodeId, array $opts=[]){
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling deleteNode");
        }
        $opts = array_merge(['permanent' => false], $opts);
        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'permanent' => $opts['permanent']
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Get node children
     * Returns the children of the node with identifier **nodeId**.\nMinimal information for each child is returned by default.\nYou can use the **include** parameter to return addtional information.\n\nThe list of child nodes includes primary children and also secondary children, if any.\n
     *
     * @param string $nodeId The identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getNodeChildren(string $nodeId, array $opts=[]){
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getNodeChildren");
        }
        $opts = array_merge(['skipCount' => 0,
                             'maxItems' => 100,
                             'orderBy' => 'ASC',
                             'where' => '',
                             'include' => [],
                             'relativePath' => '',
                             'includeSource' => false,
                             'fields' => []], $opts);
        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'skipCount'     => $opts['skipCount'],
            'maxItems'      => $opts['maxItems'],
            'orderBy'       => $opts['orderBy'],
            'where'         => $opts['where'],
            'include'       => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields'        => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
            'relativePath'  => $opts['relativePath'],
            'includeSource' => $opts['includeSource'],
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodePaging::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/children', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * List parents
     * Returns a list of parent nodes that point to (ie. are associated with) the current child node. \n\nThis inclues both the primary parent and also secondary parents, if any.\n
     *
     * @param string $childId The identifier of a node.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function listParents(string $childId, array $opts=[]){
        if (empty($childId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'childId' when calling listParents");
        }
        $opts = array_merge(['where' => '',
                             'include' => [],
                             'fields' => []], $opts);
        $postBody = null;
        $pathParams = [
            'childId' => $childId,
        ];
        $queryParams = [
            'where'         => $opts['where'],
            'include'       => $opts['include'],
            'fields'        => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeAssocPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{childId}/parents', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * List secondary children
     * Returns a list of secondary child nodes that are associated with the current parent node, via a secondary child association.\n
     *
     * @param string $parentId The identifier of a node.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function listSecondaryChildAssociations(string $parentId, array $opts=[]){
        if (empty($parentId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'parentId' when calling listSecondaryChildAssociations");
        }
        $opts = array_merge(['assocType' => '',
                             'where' => '',
                             'include' => [],
                             'fields' => []], $opts);
        $postBody = null;
        $pathParams = [
            'parentId' => $parentId,
        ];
        $queryParams = [
            'assocType'     => $opts['assocType'],
            'where'         => $opts['where'],
            'include'       => $opts['include'],
            'fields'        => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeChildAssocPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{parentId}/secondary-children', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Move a node
     * Move the node **nodeId** to the parent folder node **targetParentId**.  in request body.\nThe **targetParentId** is specified in the in request body.\n\nThe moved node retains its name unless you specify a new **name** in the request body.\n\nIf the source **nodeId** is a folder, then all of its children are also moved.\n\nThe move will effectively change the primary parent\n
     *
     * @param string $nodeId The identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param MoveBody $moveBody The targetParentId and, optionally, a new name.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function moveNode(string $nodeId, MoveBody $moveBody, array $opts=[]){
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling moveNode");
        }
        if (empty($moveBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'moveBody' when calling moveNode");
        }
        $opts = array_merge(['include' => [],
                             'fields' => []], $opts);
        $postBody = $moveBody;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'include'    => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields'     => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/move', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Remove secondary child (or children)
     * Remove secondary child association(s) between parent and child node for given association type. \n\nIf association type is not specified then all secondary child associations between parent and child are removed.\n
     *
     * @param string $parentId The identifier of a node.
     * @param string $childId The identifier of a node.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function removeSecondaryChildAssoc(string $parentId, string $childId, array $opts=[]){
        if (empty($parentId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'parentId' when calling removeSecondaryChildAssoc");
        }
        if (empty($childId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'childId' when calling removeSecondaryChildAssoc");
        }
        $opts = array_merge(['assocType' => ''], $opts);
        $postBody = null;
        $pathParams = [
            'parentId' => $parentId,
            'childId'  => $childId,
        ];
        $queryParams = [
            'assocType'     => $opts['assocType'],
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{parentId}/secondary-children/{childId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}