<?php
/**
 * Nom du fichier : NodesApi.php
 * Projet : alfresco-php-api
 * Date : 27/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\CopyBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\DeletedNodeEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\DeletedNodesPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeAssociationPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeChildAssociationPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodePaging;

class NodesApi
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
     * Create a node
     * Creates a node as a (primary) child of the node with identifier **nodeId**.\n\nYou must specify at least a **name** and **nodeType**. For example, to create a folder:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My Folder\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:folder\&quot;\n}\n&#x60;&#x60;&#x60;\n\nYou can create an empty file like this:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My text file.txt\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:content\&quot;,\n  \&quot;content\&quot;:\n   {\n     \&quot;mimeType\&quot;:\&quot;text/plain\&quot;\n   }\n}\n&#x60;&#x60;&#x60;\nYou can update binary content using the &#x60;&#x60;&#x60;PUT /nodes/{nodeId}&#x60;&#x60;&#x60; API method.\n\nYou can create a folder, or other node, inside a folder hierarchy:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My Special Folder\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:folder\&quot;,\n  \&quot;relativePath\&quot;:\&quot;X/Y/Z\&quot;\n}\n&#x60;&#x60;&#x60;\nThe **relativePath** specifies the folder structure to create relative to the node identified by  **nodeId**. Folders in the\n**relativePath** that do not exist are created before the node is created.\n\nYou can set properties when you create a new node:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My Other Folder\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:folder\&quot;,\n  \&quot;properties\&quot;:\n    {\n      \&quot;cm:title\&quot;:\&quot;Folder title\&quot;,\n      \&quot;cm:description\&quot;:\&quot;This is an important folder\&quot;\n    }\n}\n&#x60;&#x60;&#x60;\nAny missing aspects are auto-applied. For example, **cm:titled** in the JSON shown above. You can set aspects\nexplicitly set, if needed, using an **aspectNames** field.\n\nThis API method also supports file upload using multipart/form-data.\n\nUse the **filedata** field to represent the content to upload.\nYou can use a **filename** field to give an alternative name for the new file.\n\nUse **overwrite** to overwrite an existing file, matched by name. If the file is versionable,\nthe existing content is replaced.\n\nWhen you overwrite overwrite existing content, you can set the **majorVersion** boolean field to **true** to indicate a major version\nshould be created. The default for **majorVersion** is **false**.\nSetting  **majorVersion** enables versioning of the node, if it is not already versioned.\n\nWhen you overwrite overwrite existing content, you can use the **comment** field to add a version comment that appears in the\nversion history. This also enables versioning of this node, if it is not already versioned.\n\nYou can set the **autoRename** boolean field to automatically resolve name clashes. If there is a name clash, then\nthe API method tries to create\na unique name using an integer suffix.\n\nAny field in the JSON body defined below can also be passed as a form-data field.\n
     * @param string $nodeId Rhe identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param NodeBody $nodeBody The node information to create
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addNode(string $nodeId, NodeBody $nodeBody, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling addFavorite");
        }
        if (empty($nodeBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeBody' when calling addFavorite");
        }

        $postBody = $nodeBody;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'autoRename' => $opts['autoRename']?:false,
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
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
     * Copy a node
     * Copy the node **nodeId** to the parent folder node **targetParentId**. The **targetParentId** is specified in the request body.\n\nThe new node has the same name as the source node unless you specify a new **name** in the request body.\n\nIf the source **nodeId** is a folder, then all of its children are also copied.\n
     * @param string $nodeId The identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param CopyBody $copyBody The targetParentId and, optionally, a new name.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function copyNode(string $nodeId, CopyBody $copyBody, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling copyNode");
        }
        if (empty($copyBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'copyBody' when calling copyNode");
        }

        $postBody = $copyBody;
        $pathParams = [
            'nodeId' => $nodeId
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
        $returnType = NodeEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/copy', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Delete a node
     * Deletes the node with identifier **nodeId**.\nIf the **nodeId** is a folder, then its children are also deleted.\nDeleted nodes move to the trashcan unless the **permanent** query parameter is true, and the current user is the owner or an admin.\n\nDeleting a node removes the child associations, ie. both primary and also secondary, if any.\n
     * @param string $nodeId The identifier of a node
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteNode(string $nodeId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling deleteNode");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
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
     * Get a deleted node
     * Returns a specific deleted node identified by **nodeId**
     * @param string $nodeId The identifier of a node
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getDeletedNode(string $nodeId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getDeletedNode");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = DeletedNodeEntry::class;

        return $this->apiClient->callApi(
            '/deleted-nodes/{nodeId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get deleted nodes
     * Returns a list of deleted nodes for the current user.\nIf the current user is an administrator deleted nodes\nfor all users will be returned.\nThe list of deleted nodes will be ordered with the most recently deleted node at the top of the list.\n
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getDeletedNodes(array $opts = [])
    {
        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = DeletedNodesPaging::class;

        return $this->apiClient->callApi(
            '/deleted-nodes', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get file content
     * Returns the file content of the node with identifier **nodeId**
     * @param string $nodeId The identifier of a node
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getFileContent(string $nodeId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getFileContent");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'attachment' => $opts['attachment']
        ];
        $headerParams = [
            'If-Modified-Since' => $opts['ifModifiedSince']
        ];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = 'Binary';

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/content', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get a node
     * Get information for the node with identifier **nodeId**
     * @param string $nodeId The identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getNode(string $nodeId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getNode");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'relativePath' => $opts['relativePath'],
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get node content
     * **Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the content of the node with identifier **nodeId**.
     * @param string $nodeId The identifier of a node
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getNodeContent(string $nodeId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getNodeContent");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'attachment' => $opts['attachment']
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
            '/nodes/{nodeId}/content', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get node children
     * Returns the children of the node with identifier **nodeId**.\nMinimal information for each child is returned by default.\nYou can use the **include** parameter to return addtional information.\n\nThe list of child nodes includes primary children and also secondary children, if any.\n
     * @param string $nodeId The identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getNodeChildren(string $nodeId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getNodeChildren");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount'],
            'maxItems' => $opts['maxItems'],
            'orderBy' => $opts['orderBy'],
            'where' => $opts['where'],
            'relativePath' => $opts['relativePath'],
            'includeSource' => $opts['includeSource'],
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
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
     * Get parents
     * **Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of parent nodes that are associated with the current child **nodeId**.  The list includes both the primary parent and any secondary parents.
     * @param string $nodeId The identifier of a child node. You can also use one of these well-known aliases: * -my- * -shared- * -root-
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getParents(string $nodeId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getParents");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount'],
            'maxItems' => $opts['maxItems'],
            'where' => $opts['where'],
            'includeSource' => $opts['includeSource'],
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeAssociationPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/parents', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get secondary children
     * **Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of secondary child nodes that are associated with the current parent **nodeId**, via a secondary child association.
     * @param string $nodeId The identifier of a parent node. You can also use one of these well-known aliases: * -my- * -shared- * -root-
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSecondaryChildren(string $nodeId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getSecondaryChildren");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount'],
            'maxItems' => $opts['maxItems'],
            'where' => $opts['where'],
            'includeSource' => $opts['includeSource'],
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeChildAssociationPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/secondary-children', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get source associations
     * **Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of source nodes that are associated with the current target **nodeId**.
     * @param string $nodeId The identifier of a target node.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getSourceAssociations(string $nodeId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getSourceAssociations");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'where' => $opts['where'],
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeAssociationPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/sources', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}