<?php
/**
 * Nom du fichier : NodesApi.php
 * Projet : alfresco-php-api
 * Date: 11/07/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Api;

use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use AlfPHPApi\AlfrescoCoreRestApi\Model\ClassDescription;


class ClassesApi
{
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * ClassesApi constructor.
     *
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?: ApiClient::$instance;
    }


    /**
     * Gets the class information for the specified className.
     *
     * @param string $className The identifier of the class.
     * @param array $opts Optional parameters
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function getClass(string $className, array $opts=[]){
        if (empty($className)) {
            throw new \InvalidArgumentException("Missing the required parameter 'className' when calling getClass");
        }
        $opts = array_merge([], $opts);
        $postBody = null;
        $pathParams = [
            'className' => $className,
        ];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $authNames = [];
        $contentTypes = ['application/json'];
        $accepts = ['application/json'];
        $returnType = ClassDescription::class;

        return $this->apiClient->callApi(
            '/api/classes/{className}', 'GET',
            $pathParams, $queryParams, $headerParams, $formParams, $postBody,
            $authNames, $contentTypes, $accepts, $returnType
        );
    }

}