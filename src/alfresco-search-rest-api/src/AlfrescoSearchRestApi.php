<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 22:37
 */

namespace AlfPHPApi\AlfrescoSearchRestApi;


use AlfPHPApi\AlfrescoSearchRestApi\Api\SearchApi;
use AlfPHPApi\BaseListApi;

class AlfrescoSearchRestApi extends BaseListApi
{
    public static $toLoad = [
        SearchApi::class,
    ];
}