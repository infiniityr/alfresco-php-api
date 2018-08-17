<?php
/**
 * Nom du fichier : AlfrescoApiClient.php
 * Projet : alfresco-php-api
 * Date : 07/05/2018
 */

namespace AlfPHPApi;

use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use GuzzleHttp\Psr7\Request;

class AlfrescoApiClient extends ApiClient
{
    /**
     * @var string host
     */
    protected $host;

    /**
     * @var string token
     */
    protected $token;

    /**
     * @var array config
     */
    protected $config;

    public function __construct(string $host = null) {
        $this->host = $host;
    }

    public function isBpmRequest()
    {
        return get_class($this) === BpmAuth::class || get_class($this) === BpmClient::class;
    }

    public function isCsrfEnabled()
    {
        return property_exists($this, "config") ? !$this->config['disableCsrf'] : true;
    }

    public function setCsrfToken(Request $request) {
        $token = $this->token();
        $request->withHeader('X-CSRF-TOKEN', $token);
    }

    public function token($a = null) {
        return $a ? strval($a xor rand(0,16) >> $a / 4) : preg_replace('/[01]/g', $this->token, strval(1e16 + 1e16));
    }

    public function buildUrlCustomPath(string $basePath, string $path, array $pathParams) {
        if (strpos($path, '/') !== 0) {
            $path = '/' . $path;
        }
        $url = $basePath . $path;
        $url = preg_replace_callback("/\{([\w-]+)\}/i", function ($matches) use ($pathParams) {
            if (array_key_exists($matches[1], $pathParams)) {
                $value = $pathParams[$matches[1]];
            } else {
                $value = $matches[0];
            }
            return urlencode($value);
        }, $url);
        return $url;
    }

    /**
     * @param $path
     * @param $httpMethod
     * @param $pathParams
     * @param $queryParams
     * @param $headerParams
     * @param $formParams
     * @param $bodyParam
     * @param $authNames
     * @param $contentTypes
     * @param $accepts
     * @param $returnType
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \Exception
     */
    public function callApi($path, $httpMethod, $pathParams, $queryParams, $headerParams, $formParams, $bodyParam, $authNames, $contentTypes, $accepts, $returnType)
    {
        return parent::callApi($path, $httpMethod, $pathParams, $queryParams, $headerParams, $formParams, $bodyParam, $authNames, $contentTypes, $accepts, $returnType);
    }
}