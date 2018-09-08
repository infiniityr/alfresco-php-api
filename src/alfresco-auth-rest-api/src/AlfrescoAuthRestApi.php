<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 22:32
 */

namespace AlfPHPApi\AlfrescoAuthRestApi;


use AlfPHPApi\AlfrescoAuthRestApi\Api\AuthenticationApi;
use AlfPHPApi\AlfrescoAuthRestApi\Model\LoginRequest;
use AlfPHPApi\BaseListApi;

/**
 * Class AlfrescoAuthRestApi
 * @package AlfPHPApi\AlfrescoAuthRestApi
 *
 * @property-read AuthenticationApi $authenticationApi
 * @property-read AuthenticationApi $authentication
 *
 * @method \GuzzleHttp\Promise\PromiseInterface createTicket(LoginRequest $loginRequest)
 * @method \GuzzleHttp\Promise\PromiseInterface deleteTicket()
 * @method \GuzzleHttp\Promise\PromiseInterface validateTicket()
 */
class AlfrescoAuthRestApi extends BaseListApi
{
    public static $toLoad = [
        AuthenticationApi::class
    ];
}