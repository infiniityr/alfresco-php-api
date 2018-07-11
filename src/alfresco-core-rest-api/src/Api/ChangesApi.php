<?php
/**
 * Nom du fichier : ChangesApi.php
 * Projet : alfresco-php-api
 * Date: 11/07/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\AssocTargetBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\DeletedNodeEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\DeletedNodesPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeAssocPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeChildAssocPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodePaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeSharedLinkEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeSharedLinkPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\RenditionEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\RenditionPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteEntry;

class ChangesApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * ChangesApi constructor.
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
     * Create a node
     * Creates a node as a (primary) child of the node with identifier **nodeId**.\n\nYou must specify at least a **name** and **nodeType**. For example, to create a folder:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My Folder\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:folder\&quot;\n}\n&#x60;&#x60;&#x60;\n\nYou can create an empty file like this:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My text file.txt\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:content\&quot;,\n  \&quot;content\&quot;:\n   {\n     \&quot;mimeType\&quot;:\&quot;text/plain\&quot;\n   }\n}\n&#x60;&#x60;&#x60;\nYou can update binary content using the &#x60;&#x60;&#x60;PUT /nodes/{nodeId}&#x60;&#x60;&#x60; API method.\n\nYou can create a folder, or other node, inside a folder hierarchy:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My Special Folder\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:folder\&quot;,\n  \&quot;relativePath\&quot;:\&quot;X/Y/Z\&quot;\n}\n&#x60;&#x60;&#x60;\nThe **relativePath** specifies the folder structure to create relative to the node identified by  **nodeId**. Folders in the\n**relativePath** that do not exist are created before the node is created.\n\nYou can set properties when you create a new node:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My Other Folder\&quot;,\n  \&quot;nodeType\&quot;:\&quot;cm:folder\&quot;,\n  \&quot;properties\&quot;:\n    {\n      \&quot;cm:title\&quot;:\&quot;Folder title\&quot;,\n      \&quot;cm:description\&quot;:\&quot;This is an important folder\&quot;\n    }\n}\n&#x60;&#x60;&#x60;\nAny missing aspects are auto-applied. For example, **cm:titled** in the JSON shown above. You can set aspects\nexplicitly set, if needed, using an **aspectNames** field.\n\nThis API method also supports file upload using multipart/form-data.\n\nUse the **filedata** field to represent the content to upload.\nYou can use a **filename** field to give an alternative name for the new file.\n\nUse **overwrite** to overwrite an existing file, matched by name. If the file is versionable,\nthe existing content is replaced.\n\nWhen you overwrite overwrite existing content, you can set the **majorVersion** boolean field to **true** to indicate a major version\nshould be created. The default for **majorVersion** is **false**.\nSetting  **majorVersion** enables versioning of the node, if it is not already versioned.\n\nWhen you overwrite overwrite existing content, you can use the **comment** field to add a version comment that appears in the\nversion history. This also enables versioning of this node, if it is not already versioned.\n\nYou can set the **autoRename** boolean field to automatically resolve name clashes. If there is a name clash, then\nthe API method tries to create\na unique name using an integer suffix.\n\nAny field in the JSON body defined below can also be passed as a form-data field.\n
     *
     * @param string   $nodeId   The identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param NodeBody $nodeBody The node information to create
     * @param array    $opts     Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function addNode(string $nodeId, NodeBody $nodeBody, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling addNode");
        }
        if (empty($nodeBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeBody' when calling addNode");
        }

        $postBody = $nodeBody;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'autoRename' => $opts['autoRename'] ?: false,
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
     * Copy a node
     * Copy the node **nodeId** to the parent folder node **targetParentId**. The **targetParentId** is specified in the request body.\n\nThe new node has the same name as the source node unless you specify a new **name** in the request body.\n\nIf the source **nodeId** is a folder, then all of its children are also copied.\n
     *
     * @param string   $nodeId   The identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param CopyBody $copyBody The targetParentId and, optionally, a new name.
     * @param array    $opts     Optional parameters
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
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields'  => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
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
     * Create a site
     * Creates a default site with the given details.  Unless explicitly specified, the site id will be generated from the site title. The site id must be unique and only contain alphanumeric and/or dash\ncharacters.\n\nFor example, to create a public site called \&quot;Marketing\&quot; the following body could be used:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;title\&quot;: \&quot;Marketing\&quot;,\n  \&quot;visibility\&quot;: \&quot;PUBLIC\&quot;\n}\n&#x60;&#x60;&#x60;\n\nThe creation of the (surf) configuration files required by Share can be skipped via the **skipConfiguration** query parameter.\n\n**Please note: if skipped then such a site will *not* work within Share.**\n\nThe addition of the site to the user&#39;s site favorites can be skipped via the **skipAddToFavorites** query parameter.\n\nThe creator will be added as a member with Site Manager role.\n
     * @param SiteBody $siteBody The site details
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createSite(SiteBody $siteBody, array $opts = [])
    {
        if (empty($siteBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteBody' when calling createSite");
        }

        $postBody = $siteBody;
        $pathParams = [];
        $queryParams = [
            'skipConfiguration' => $opts['skipConfiguration']?:false,
            'skipAddToFavorites' => $opts['skipAddToFavorites']?:false
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SiteEntry::class;

        return $this->apiClient->callApi(
            '/sites', 'POST',
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
        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'permanent' => $opts['permanent'] ?: false
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
     * Delete a site
     * Deletes the site with **siteId**
     * @param string $siteId The identifier of a site.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function deleteSite(string $siteId, array $opts = [])
    {
        if (empty($siteId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'siteId' when calling deleteSite");
        }

        $postBody = null;
        $pathParams = [
            'siteId' => $siteId
        ];
        $queryParams = [
            'permanent' => $opts['permanent']?:false
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/sites/{siteId}', 'DELETE',
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
     * Get a deleted node
     * Returns a specific deleted node identified by **nodeId**
     *
     * @param string $nodeId The identifier of a node
     * @param array  $opts   Optional parameters
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
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
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
     *
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
            'skipCount' => $opts['skipCount'] ?: 0,
            'maxItems'  => $opts['maxItems'] ?: 100,
            'include'   => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
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
     *
     * @param string $nodeId The identifier of a node
     * @param array  $opts   Optional parameters
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
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'attachment' => $opts['attachment'],
        ];
        $headerParams = [
            'If-Modified-Since' => $opts['ifModifiedSince'],
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
     *
     * @param string $nodeId The identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param array  $opts   Optional parameters
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
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'relativePath' => $opts['relativePath'],
            'include'      => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields'       => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
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
        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'skipCount'     => $opts['skipCount'] ?: 0,
            'maxItems'      => $opts['maxItems'] ?: 100,
            'orderBy'       => $opts['orderBy'] ?: 'ASC',
            'where'         => $opts['where'] ?: '',
            'include'       => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields'        => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
            'relativePath'  => $opts['relativePath'] ?: '',
            'includeSource' => $opts['includeSource'] ?: false,
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
        $postBody = null;
        $pathParams = [
            'childId' => $childId,
        ];
        $queryParams = [
            'where'         => $opts['where'] ?: '',
            'include'       => $opts['include'] ?: '',
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
        $postBody = null;
        $pathParams = [
            'parentId' => $parentId,
        ];
        $queryParams = [
            'assocType'     => $opts['assocType'] ?: '',
            'where'         => $opts['where'] ?: '',
            'include'       => $opts['include'] ?: '',
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
        if (empty($targetId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'targetId' when calling listSourceNodeAssociations");
        }
        $postBody = null;
        $pathParams = [
            'targetId' => $targetId,
        ];
        $queryParams = [
            'where' => $opts['where'] ?: '',
            'include'    => $opts['include'] ?: '',
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
        if (empty($sourceId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'sourceId' when calling listTargetAssociations");
        }

        $postBody = null;
        $pathParams = [
            'sourceId' => $sourceId,
        ];
        $queryParams = [
            'where' => $opts['where'] ?: '',
            'include'    => $opts['include'] ?: '',
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
     * Live search for nodes
     * Returns a list of nodes that match the given search criteria.\n\nThe search term is used to look for nodes that match against name, title, description, full text content and tags.\n\nThe search term\n- must contain a minimum of 3 alphanumeric characters\n- allows \&quot;quoted term\&quot;\n- can optionally use &#39;*&#39; for wildcard matching\n\nBy default, file and folder types will be searched unless a specific type is provided as a query parameter.\n\nBy default, the search will be across the repository unless a specific root node id is provided to start the search from.\n
     *
     * @param string $term The term to search for.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function liveSearchNodes(string $term, array $opts=[]){
        if (empty($term)) {
            throw new \InvalidArgumentException("Missing the required parameter 'term' when calling liveSearchNodes");
        }

        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'skipCount'     => $opts['skipCount'] ?: 0,
            'maxItems'      => $opts['maxItems'] ?: 100,
            'term'          => $term,
            'rootNodeId'    => $opts['rootNodeId'],
            'nodeType'      => $opts['nodeType'],
            'orderBy'       => $opts['orderBy'] ?: 'ASC',
            'fields'        => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodePaging::class;

        return $this->apiClient->callApi(
            '/queries/live-search-nodes', 'GET',
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
            'assocType' => $opts['assocType'] ?: '',
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
        $postBody = null;
        $pathParams = [
            'parentId' => $parentId,
            'childId'  => $childId,
        ];
        $queryParams = [
            'assocType'     => $opts['assocType'] ?: '',
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


    /**
     * Restore a deleted node
     * Attempts to restore the deleted node identified by **nodeId** to its original location.
     *
     * @param string $nodeId The identifier of a node
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function restoreNode(string $nodeId)
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling restoreNode");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeEntry::class;

        return $this->apiClient->callApi(
            '/deleted-nodes/{nodeId}/restore', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Update file content
     * Updates the content of the node with identifier **nodeId**.\n\nThe request body for this endpoint can be any text or binary stream. The Content-Type header should be set\ncorrectly for the type of content being updated. The Content-Type header is used to set the mimetype in the repository.\n\nThe **majorVersion** and **comment** parameters can be used to control versioning behaviour. If the content is versionable,\na new minor version is created by default.\n\n**Note:** This API method accepts any content type, but for testing with this tool text based content can be provided.\nThis is because the OpenAPI Specification does not allow a wildcard to be provided or the ability for\ntooling to accept an arbitary file.\n
     *
     * @param string $nodeId
     * @param string $contentBody
     * @param array  $opts
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateFileContent(string $nodeId, string $contentBody, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling updateFileContent");
        }
        if (empty($contentBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'contentBody' when calling updateFileContent");
        }

        $postBody = $contentBody;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'majorVersion' => $opts['majorVersion'],
            'comment'      => $opts['comment'] ?: '',
            'include'      => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields'       => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/content', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }


    /**
     * Update a node
     * Updates the node with identifier **nodeId**. For example, you can rename a file or folder:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;name\&quot;:\&quot;My new name\&quot;,\n}\n&#x60;&#x60;&#x60;\nYou can also set or update one or more properties:\n&#x60;&#x60;&#x60;JSON\n{\n  \&quot;properties\&quot;:\n    {\n      \&quot;cm:title\&quot;:\&quot;Folder title\&quot;\n    }\n}\n&#x60;&#x60;&#x60;\n**Note:** if you want to add or remove aspects, then you must use **GET /nodes/{nodeId}** first to get the complete set of *aspectNames*.\n\n**Note:** Currently there is no optimistic locking for updates, so they are applied in \&quot;last one wins\&quot; order.\n
     *
     * @param string   $nodeId   The identifier of a node. You can also use one of these well-known aliases:\n* -my-\n* -shared-\n* -root-\n
     * @param NodeBody $nodeBody The node information to update.
     * @param array    $opts     Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function updateNode(string $nodeId, NodeBody $nodeBody, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling updateNode");
        }
        if (empty($nodeBody)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeBody' when calling updateNode");
        }

        $postBody = $nodeBody;
        $pathParams = [
            'nodeId' => $nodeId,
        ];
        $queryParams = [
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'fields'  => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodeEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}', 'PUT',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}