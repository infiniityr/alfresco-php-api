<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 22:37
 */

namespace AlfPHPApi\AlfrescoGsCoreRestApi;


use AlfPHPApi\AlfrescoGsCoreRestApi\Api\FilePlansApi;
use AlfPHPApi\BaseListApi;

class AlfrescoGsCoreRestApi extends BaseListApi
{
    public static $toLoad = [
        FilePlansApi::class
    ];
}