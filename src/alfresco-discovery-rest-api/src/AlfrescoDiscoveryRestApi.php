<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 22:39
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi;


use AlfPHPApi\AlfrescoDiscoveryRestApi\Api\DiscoveryApi;
use AlfPHPApi\BaseListApi;

/**
 * Class AlfrescoDiscoveryRestApi
 * @package AlfPHPApi\AlfrescoDiscoveryRestApi
 *
 * @property-read DiscoveryApi $discoveryApi
 * @property-read DiscoveryApi $discovery
 *
 * @method \GuzzleHttp\Promise\PromiseInterface getRepositoryInformation()
 */
class AlfrescoDiscoveryRestApi extends BaseListApi
{
    public static $toLoad = [
        DiscoveryApi::class,
    ];
}