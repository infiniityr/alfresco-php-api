<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 05/07/2018
 * Time: 08:59
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoSearchRestApi\Model\ResultSetPaging;
use AlfPHPApi\AlfrescoSearchRestApi\Model\SearchRequest;

class SearchApi
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
     * @param SearchRequest $searchRequest
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function search(SearchRequest $searchRequest){
        if (empty($searchRequest)) {
            throw new \InvalidArgumentException("Missing the required parameter 'searchRequest' when calling search");
        }
        $postBody = $searchRequest;
        $pathParams = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ResultSetPaging::class;

        return $this->apiClient->callApi(
            '/search', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}