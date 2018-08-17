<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 22:38
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi;


use AlfPHPApi\AlfrescoActivitiRestApi\Api\AboutApi;
use AlfPHPApi\BaseListApi;

class AlfrescoActivitiRestApi extends BaseListApi
{
    public static $toLoad = [
        AboutApi::class,
    ];
}