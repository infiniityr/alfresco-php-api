<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 22:32
 */

namespace AlfPHPApi\AlfrescoAuthRestApi;


use AlfPHPApi\AlfrescoAuthRestApi\Api\AuthenticationApi;
use AlfPHPApi\BaseListApi;

class AlfrescoAuthRestApi extends BaseListApi
{
    public static $toLoad = [
        AuthenticationApi::class
    ];
}