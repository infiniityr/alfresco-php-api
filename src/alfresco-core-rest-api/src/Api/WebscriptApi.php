<?php
/**
 * Nom du fichier : WebscriptApi.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;


use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

class WebscriptApi
{
    /**
     * @var ApiClient
     */
    public $apiClient;

    protected $allowedMethod = ['GET', 'POST', 'PUT', 'DELETE'];

    /**
     * WebscriptApi constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient?:ApiClient::$instance;
    }

    /**
     * Call a get on a Web Scripts.
     *
     * @param string $httpMethod
     * @param string $scriptPath
     * @param array $scriptArgs
     * @param string $contextRoot
     * @param string $servicePath
     * @param string $postBody
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function executeWebScript(string $httpMethod, string $scriptPath, array $scriptArgs = [], string $contextRoot = 'alfresco', string $servicePath = 'service', string $postBody = null)
    {
        if (empty($httpMethod) or !in_array($httpMethod, $this->allowedMethod)) {
            throw new \InvalidArgumentException("method allowed value GET, POST, PUT and DELETE");
        }

        if (empty($scriptPath)) {
            throw new \InvalidArgumentException("Missing the required parameter scriptPath when calling executeWebScript");
        }

        $pathParams = [];
        $headerParams = [];
        $formParams = [];

        $authNames = ['basicAuth'];
        $contentTypes = ['application/json'];
        $accepts = ['application/json', 'text/html'];
        $returnType = [];

        return $this->apiClient->callApi(
            '/'.$servicePath.'/'.$scriptPath, $httpMethod,
            $pathParams, $scriptArgs,$headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }
}