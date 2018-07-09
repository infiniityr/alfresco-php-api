<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 08/07/2018
 * Time: 14:10
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\PersonNetworkEntry;
use AlfPHPApi\AlfrescoCoreRestApi\Model\PersonNetworkPaging;

class NetworksApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * NetworksApi constructor.
     *
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?: ApiClient::$instance;
    }

    /**
     * Get a network
     * Returns information for a network **networkId**
     *
     * @param string $networkId The identifier of a network
     * @param array  $opts      Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getNetwork(string $networkId, array $opts = [])
    {
        if (empty($networkId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'networkId' when calling getNetwork");
        }

        $postBody = null;
        $pathParams = [
            'networkId' => $networkId,
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = PersonNetworkEntry::class;

        return $this->apiClient->callApi(
            '/networks/{networkId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * Get network information
     * Gets network information on a single network specified by **networkId** for **personId**.  You can use the &#x60;-me-&#x60; string in place of &#x60;&lt;personId&gt;&#x60; to specify the currently authenticated user.
     *
     * @param string $personId  The identifier of a person
     * @param string $networkId The identifier of a network
     * @param array  $opts      Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getNetworkForPerson(string $personId, string $networkId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling getNetworkForPerson");
        }
        if (empty($networkId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'networkId' when calling getNetworkForPerson");
        }

        $postBody = null;
        $pathParams = [
            'personId'  => $personId,
            'networkId' => $networkId,
        ];
        $queryParams = [
            'fields' => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = PersonNetworkEntry::class;

        return $this->apiClient->callApi(
            '/people/{personId}/networks/{networkId}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

    /**
     * List network membership
     * Gets a list of network memberships for person **personId**.  You can use the &#x60;-me-&#x60; string in place of &#x60;&lt;personId&gt;&#x60; to specify the currently authenticated user.
     *
     * @param string $personId The identifier of a person
     * @param array  $opts     Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function listNetworksForPerson(string $personId, array $opts = [])
    {
        if (empty($personId)) {
            throw new \InvalidArgumentException("Missing the required parameter 'personId' when calling listNetworksForPerson");
        }

        $postBody = null;
        $pathParams = [
            'personId' => $personId,
        ];
        $queryParams = [
            'skipCount' => $opts['skipCount'],
            'maxItems'  => $opts['maxItems'],
            'fields'    => $this->apiClient->buildCollectionParam($opts['fields'], 'csv'),
        ];
        $headerParams = [];
        $formParams = [];
        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = PersonNetworkPaging::class;

        return $this->apiClient->callApi(
            '/people/{personId}/networks', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}