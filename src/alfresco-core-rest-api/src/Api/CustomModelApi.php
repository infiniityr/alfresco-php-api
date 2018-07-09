<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 09/07/2018
 * Time: 22:09
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
     * NetworksApi constructor.
     *
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?: ApiClient::$instance;
    }

    /**
     * Create Custom Model
     * @param string $status
     * @param string $description
     * @param string $name
     * @param string $namespaceUri
     * @param string $namespacePrefix
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function createCustomModel(string $status, string $description, string $name, string $namespaceUri, string $namespacePrefix)
    {
        if (empty($namespaceUri)) {
            throw new \InvalidArgumentException("Missing the required parameter 'namespaceUri' when calling createCustomModel");
        }
        if (empty($namespacePrefix)) {
            throw new \InvalidArgumentException("Missing the required parameter 'namespacePrefix' when calling createCustomModel");
        }

        $postBody = [
            'status' => $status,
            'description' => $description,
            'name' => $name,
            'namespaceUri' => $namespaceUri,
            'namespacePrefix' => $namespacePrefix
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
            '/cmm', 'POST',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}