<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 22:39
 */

namespace AlfPHPApi\AlfrescoGsClassificationRestApi;


use AlfPHPApi\AlfrescoGsClassificationRestApi\Api\ClassificationGuidesApi;
use AlfPHPApi\BaseListApi;

class AlfrescoGsClassificationRestApi extends BaseListApi
{
    public static $toLoad = [
        ClassificationGuidesApi::class,
    ];
}