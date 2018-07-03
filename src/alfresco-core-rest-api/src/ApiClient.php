<?php
/**
 * Nom du fichier : ApiClient.php
 * Projet : alfresco-php-api
 * Date : 07/05/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

class ApiClient
{
    /**
     *  The base URL against which to resolve every API call's (relative) path <br/>
     *  Default : https://localhost/alfresco/api/-default-/public/alfresco/versions/1
     * @var string
     */
    public $basePath = 'https://localhost/alfresco/api/-default-/public/alfresco/versions/1';

    /**
     *  The authentication methods to be included for all API calls.
     * @var array
     */
    public $authentications = [
        'basicAuth' => [
            'type' => 'basic'
        ]
    ];

    /**
     *  The default HTTP headers to be included for all API calls.
     * @var array
     */
    public $defaultHeaders = [];

    /**
     * The default HTTP timeout for all API calls. <br/>
     * Default : 60000
     * @var int
     */
    public $timeout = 60000;

    /**
     * Comma-separated values. Value: <code>csv</code>
     */
    const CSV = ",";
    /**
     * Space-separated values. Value: <code>ssv</code>
     */
    const SSV = " ";
    /**
     * Tab-separated values. Value: <code>tsv</code>
     */
    const TSV = "\t";
    /**
     * Pipe(|)-separated values. Value: <code>pipes</code>
     */
    const PIPES = "|";
    /**
     * Native array. Value: <code>multi</code>
     */
    const MULTI = "multi";

    public static $instance = null;

    /**
     * Returns a string representation for an actual parameter.
     * @param $param
     *      The actual parameter.
     * @return string
     *      The string representation of <code>param</code>
     */
    public function paramToString ($param) {
        if (empty($param)) {
            return '';
        }
        if ($param instanceof \DateTime) {
            return $param->format(\DateTime::ISO8601);
        }
        if (is_object($param)) {
            return $param->__toString();
        }
        if (is_array($param)) {
            return implode(',', $param);
        }
        return (string)$param;
    }

    /**
     * Builds full URL by appending the given path to the base URL and replacing path parameter place-holders with parameter values.
     * NOTE: query parameters are not handled here.
     * @param string $path
     *      The path to append to the base URL.
     * @param array $pathParams
     *      The parameter values to append.
     * @return string
     *      The encoded path with parameter values substituted.
     */
    public function buildUrl ($path, $pathParams) {
        if (!preg_match('/^\//', $path)) {
            $path = '/' . $path;
        }
        $url = $this->basePath . $path;
        $url = preg_replace_callback('/\{([\w-]+)\}/', function ($match) use ($pathParams) {
            return urlencode((isset($pathParams[$match[1]]))?$this->paramToString($pathParams[$match[1]]):$match[0]);
        }, $url);
        return $url;
    }

    /**
     * Checks whether the given content type represents JSON. <br/>
     * JSON content type examples : <br/>
     * <ul><li>application/json</li>
     * <li>application/json; charset=UTF8</li>
     * <li>APPLICATION/JSON</i></ul>
     * @param string $contentType
     *      The MIME content type to check.
     * @return bool
     *      <code>true</code> id <code>contentType</code> represents JSON, otherwise <code>false</code>
     */
    public function isJsonMime ($contentType) {
        return $contentType != null && preg_match('/^application\/json(;.*)?$/', $contentType);
    }

    /**
     * Chooses a content type from the given array, with JSON preferred; i.e. return JSON if included, otherwise return the first.
     * @param array $contentTypes
     * @return string
     *      The chosen content type, preferring JSON.
     */
    public function jsonPreferredMime ($contentTypes) {
        for ($i = 0; $i < sizeof($contentTypes); $i++) {
            if ($this->isJsonMime($contentTypes[$i])) {
                return $contentTypes[$i];
            }
        }
        return $contentTypes[0];
    }

    /**
     * Checks whether the given parameter value represents file-like content.
     * @param $param
     *      The parameter to check.
     * @return bool
     *      <code>true</code> if <code>param</code> represents a file.
     */
    public function isFileParam ($param) {
        if ($param instanceof \SplFileObject) {
            return true;
        }
        if (is_string($param)) {
            return is_file($param);
        }
        return false;
    }

    /**
     * Normalizes parameter values : <br/>
     * <ul><li>remove nils</li>
     * <li>keep files and arrays</li>
     * <li>format to string with `paramToString` for other cases</li></ul>
     * @param array $params
     *      The parameters as array.
     * @return array
     *      Normalized parameters
     */
    public function normalizeParams ($params) {
        $newParams = [];
        foreach ($params as $key => $val) {
            if (!empty($val)) {
                if ($this->isFileParam($val) || is_array($val)) {
                    $newParams[$key] = $val;
                } else {
                    $newParams[$key] = $this->paramToString($val);
                }
            }
        }
        return $newParams;
    }

    /**
     * Builds a string representation of an array-type actual parameter, according to the given collection format.
     * @param array $param
     *      An array parameter.
     * @param string $collectionFormat
     *      The array element separator strategy.
     * @return null|string|array
     *      A string representation of the supplied collection, using the specified delimiter.
     *      Returns <code>param</code> as is if <code>collectionFormat</code> is <code>multi</code>
     * @throws \Exception
     */
    public function buildCollectionParam ($param, $collectionFormat) {
        if (empty($param)) {
            return null;
        }
        switch ($collectionFormat) {
            case 'csv':
                return implode(static::CSV, array_map([$this, 'paramToString'], $param));
            case 'ssv':
                return implode(static::SSV, array_map([$this, 'paramToString'], $param));
            case 'tsv':
                return implode(static::TSV, array_map([$this, 'paramToString'], $param));
            case 'pipes':
                return implode(static::PIPES, array_map([$this, 'paramToString'], $param));
            case 'multi':
                return array_map([$this, 'paramToString'], $param);
            default:
                throw new \Exception('Unknown collection format: ' . $collectionFormat);
        }
    }

    /**
     * Applies authentication headers to the request.
     * @param array $authNames
     *      An array of authentication method names.
     * @return array
     *      An array with the authentication
     * @throws \Exception
     */
    public function applyAuthToRequest ($authNames) {
        $result = [];
        foreach ($authNames as $authName) {
            $auth = $this->authentications[$authName];
            switch ($auth['type']) {
                case 'basic':
                    if ($auth['username'] || $auth['password']) {
                        $result = [
                            'auth' => [
                                !empty($auth['username'])?urlencode($auth['username']):'',
                                !empty($auth['password'])?urlencode($auth['password']):''
                            ]
                        ];
                    }
                    break;
                case 'apiKey':
                    if (!empty($auth['apiKey'])) {
                        $data = [];
                        if (!empty($auth['apiKeyPrefix'])) {
                            $data[$auth['name']] = $auth['apiKeyPrefix'] . ' ' . $auth['apiKey'];
                        } else {
                            $data[$auth['name']] = $auth['apiKey'];
                        }
                        if ($auth['in'] === 'header') {
                            $result = [
                                'headers' => $data
                            ];
                        } else {
                            $result = [
                                'query' => $data
                            ];
                        }
                    }
                    break;
                case 'activiti':
                    if (!empty($auth['ticket'])) {
                        $result = [
                            'headers' => [
                                'Authorization' => $auth['ticket']
                            ]
                        ];
                    }
                    break;
                case 'oauth2':
                    if (!empty($auth['accessToken'])) {
                        $result = [
                            'headers' => [
                                'Authorization' => 'Bearer ' . $auth['accessToken']
                            ]
                        ];
                    }
                    break;
                default:
                    throw new \Exception('Unknown authentication type: ' . $auth['type']);
            }
        }
        return $result;
    }

    /**
     *
     * @param ResponseInterface $response
     * @param $returnType
     * @return null
     */
    public function deserialize ($response, $returnType) {
        if (empty($response) || empty($returnType)) {
            return null;
        }
        
        $data = $response->getBody()->getContents();
        if ($this->isJsonMime($response->getHeader('Content-Type')[0])) {
            $data = \GuzzleHttp\json_decode($data, true);
        }
        return static::convertToType($data, $returnType);
    }

    /**
     *
     * convertToType
     *
     * @param $data
     * @param $type
     *
     * @return array|bool|\DateTime|float|int|mixed|null|string
     */
    public static function convertToType($data, $type) {
        switch ($type) {
            case 'Binary':
                return $data;
            case 'Boolean':
                return boolval($data);
            case 'Integer':
                return intval($data, 10);
            case 'Number':
                return floatval($data);
            case 'String':
                return !empty($data) ? strval($data) : $data;
            case 'Date':
                return $data ? static::parseDate(strval($data)) : null;
            case 'Array':
                return is_array($data)?$data:[$data];
            default:
                if (is_array($type)) {
                    $result = [];
                    foreach ($type as $key => $value) {
                        $keyType = is_string($key) ?$key:'Integer';
                        foreach ($data as $keyd => $datum) {
                            $result[static::convertToType($keyd, $keyType)] = static::convertToType($datum, $value);
                        }
                    }
                    return $result;
                } elseif (class_exists($type)) {
                    if (method_exists($type, 'constructFromArray')) {
                        return $type::constructFromArray($data);
                    }
                    return $type($data);
                } else {
                    return $data;
                }
        }
    }

    /**
     *
     * callApi
     *
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
    public function callApi ($path, $httpMethod, $pathParams, $queryParams, $headerParams, $formParams, $bodyParam, $authNames, $contentTypes, $accepts, $returnType) {
        $url = $this->buildUrl($path, $pathParams);

        $options = $this->applyAuthToRequest($authNames);

        $options = array_merge([
            'query' => empty($options['query'])?$queryParams:array_merge($options['query'], $queryParams),
            'headers' => empty($options['headers'])?$headerParams:array_merge($this->defaultHeaders, $options['headers'], $headerParams),
            'timeout' => $this->timeout/1000
        ], $options);

        $contentType = $this->jsonPreferredMime($contentTypes);
        if (empty($contentType)) {
            $contentType = 'application/json';
        }
        $options['headers']['Content-Type'] = $contentType;

        if ($contentType === 'application/x-www-form-urlencoded') {
            $options['form_params'] = $this->normalizeParams($formParams);
        } elseif ($contentType === 'multipart/form-data') {
            $_form_params = $this->normalizeParams($formParams);
            foreach ($_form_params as $key => $val) {
                if ($this->isFileParam($val)) {
                    $options['multipart'][] = [
                        'name' => $key,
                        'contents' => $val
                    ];
                } else {
                    $options['multipart'][] = [
                        'name' => $key,
                        'contents' => $val
                    ];
                }
            }
        } elseif ($this->isJsonMime($contentType)) {
            $options['json'] = json_encode($bodyParam);
        } elseif (!empty($bodyParam)) {
            $options['body'] = $bodyParam;
        }

        $request = new Request($httpMethod, $url);


        return (new Client())->sendAsync($request, $options)->then(function (ResponseInterface $response) use ($returnType) {
            return $this->deserialize($response, $returnType);
        }, function (RequestException $failure) {
            return $failure;
        });
    }


    /**
     * Parses an ISO-8601 string representation of a date value.
     * @static parseDate
     *
     * @param string $str
     *      The date value as a string.
     * @return \DateTime
     *      The parsed date object.
     */
    public static function parseDate ($str) {
        return \DateTime::createFromFormat(\DateTime::ISO8601, $str);
    }

    /**
     * Parses the date component of a ISO-8601 string representation of a date value.
     * @static parseDateTime
     *
     * @param string $str
     *      The date value as a string.
     * @return \DateTime
     *      The parsed date object.
     */
    public static function parseDateTime ($str) {
        return \DateTime::createFromFormat(\DateTime::ISO8601, $str);
    }

    /**
     * Parses the timezone component of a ISO-8601 string representation of a date value.
     * @static parseDateTimeZone
     *
     * @param string $str
     *      The timezone offset as a string, e.g. '+0000', '+2000' or '-0500'.
     * @return int
     *      The number of minutes offset from UTC.
     */
    public static function parseDateTimeZone ($str) {
        preg_match('/([\+\-])(\d{2}):?(\d{2})?/', $str, $matches);
        if (!empty($matches)) {
            return intval($matches[2]) * 60 + intval($matches[3]?:0);
        }
        else {
            return 0;
        }
    }
}

ApiClient::$instance = new ApiClient();