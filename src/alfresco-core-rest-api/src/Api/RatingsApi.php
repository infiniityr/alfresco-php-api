<?php
/**
 * Nom du fichier : RatingsApi.php
 * Projet : alfresco-php-api
 * Date : 21/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\RatingBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\RatingEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\RatingPaging;

class RatingsApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * SiteApi constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient?:ApiClient::$instance;
    }

    /**
     * Get a rating
     * Get the specific rating **ratingId** on node **nodeId**
     * @param string $nodeId The identifier of a node.
     * @param string $ratingId The identifier of a rating
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getRating(string $nodeId, string $ratingId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getRating");
        }
        if (empty($ratingId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'ratingId' when calling getRating");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
            'ratingId' => $ratingId,
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = RatingEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/ratings/{ratingId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get ratings
     * Get the ratings for node **nodeId**
     * @param string $nodeId The identifier of a node
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getRatings(string $nodeId, array $opts = [])
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling getRatings");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount']?:0,
            'maxItems' => $opts['maxItems']?:100,
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv')
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = RatingPaging::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/ratings', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Rate
     * Rate the node with identifier **nodeId**
     * @param string $nodeId The identifier of a node.
     * @param RatingBody $ratingBody For \&quot;myRating\&quot; the type is specific to the rating scheme, boolean for the likes and an integer for the fiveStar.\n\nFor example, to \&quot;like\&quot; a file the following body would be used:\n\n  &#x60;&#x60;&#x60;JSON\n    {\n      \&quot;id\&quot;: \&quot;likes\&quot;,\n      \&quot;myRating\&quot;: true\n    }\n  &#x60;&#x60;&#x60;\n
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function rate(string $nodeId, RatingBody $ratingBody)
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling rate");
        }

        $postBody = $ratingBody;
        $pathParams = [
            'nodeId' => $nodeId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = RatingEntry::class;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/ratings', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Delete a rating
     * Removes rating **ratingId** from node **nodeId**
     * @param string $nodeId The identifier of a node.
     * @param string $ratingId The identifier of a rating.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function removeRating(string $nodeId, string $ratingId)
    {
        if (empty($nodeId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'nodeId' when calling removeRating");
        }
        if (empty($ratingId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'ratingId' when calling removeRating");
        }

        $postBody = null;
        $pathParams = [
            'nodeId' => $nodeId,
            'ratingId' => $ratingId
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = null;

        return $this->apiClient->callApi(
            '/nodes/{nodeId}/ratings/{ratingId}', 'DELETE',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}