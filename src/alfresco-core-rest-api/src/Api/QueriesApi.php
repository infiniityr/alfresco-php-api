<?php
/**
 * Nom du fichier : QueriesApi.php
 * Projet : alfresco-php-api
 * Date : 23/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodePaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\PersonPaging;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SitePaging;

class QueriesApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * QueriesApi constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient?:ApiClient::$instance;
    }

    /**
     * Find nodes
     * **Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of nodes that match the given search criteria.  The search term is used to look for nodes that match against name, title, description, full text content or tags.  The search term: - must contain a minimum of 3 alphanumeric characters - allows \&quot;quoted term\&quot; - can optionally use &#39;*&#39; for wildcard matching  By default, file and folder types will be searched unless a specific type is provided as a query parameter.  By default, the search will be across the repository unless a specific root node id is provided to start the search from.  You can sort the result list using the **orderBy** parameter. You can specify one or more of the following fields in the **orderBy** parameter: * name * modifiedAt * createdAt
     * @param string $term The term to search for.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function findNodes(string $term, array $opts = [])
    {
        if (empty($term)) {
            throw new \InvalidArgumentException("Missing the required parameter 'term' when calling findNodes");
        }

        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'term' => $term,
            'rootNodeId' => $opts['rootNodeId']?:'',
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'nodeType' => $opts['nodeType']?:'',
            'include' => $this->apiClient->buildCollectionParam($opts['include'], 'csv'),
            'orderBy' => $this->apiClient->buildCollectionParam($opts['orderBy'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = NodePaging::class;

        return $this->apiClient->callApi(
            '/queries/nodes', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Find people
     * **Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of people that match the given search criteria.  The search term is used to look for matches against person id, firstname and lastname.  The search term: - must contain a minimum of 2 alphanumeric characters - can optionally use &#39;*&#39; for wildcard matching within the term  You can sort the result list using the **orderBy** parameter. You can specify one or more of the following fields in the **orderBy** parameter: * id * firstName * lastName
     * @param string $term The term to search for.
     * @param array $opts Optional parameters.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function findPeople(string $term, array $opts = [])
    {
        if (empty($term)) {
            throw new \InvalidArgumentException("Missing the required parameter 'term' when calling findPeople");
        }

        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'term' => $term,
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'orderBy' => $this->apiClient->buildCollectionParam($opts['orderBy'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = PersonPaging::class;

        return $this->apiClient->callApi(
            '/queries/people', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Find sites
     * **Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of sites that match the given search criteria.  The search term is used to look for sites that match against site id, title or description.  The search term: - must contain a minimum of 2 alphanumeric characters - can optionally use &#39;*&#39; for wildcard matching within the term  The default sort order for the returned list is for sites to be sorted by ascending id.  You can override the default by using the **orderBy** parameter. You can specify one or more of the following fields in the **orderBy** parameter: * id * title * description
     * @param string $term The term to search for
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function findSites(string $term, array $opts = [])
    {
        if (empty($term)) {
            throw new \InvalidArgumentException("Missing the required parameter 'term' when calling findSites");
        }

        $postBody = null;
        $pathParams = [];
        $queryParams = [
            'term' => $term,
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'orderBy' => $this->apiClient->buildCollectionParam($opts['orderBy'], 'csv'),
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = SitePaging::class;

        return $this->apiClient->callApi(
            '/queries/sites', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}