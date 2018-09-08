<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 22:37
 */

namespace AlfPHPApi\AlfrescoSearchRestApi;


use AlfPHPApi\AlfrescoSearchRestApi\Api\SearchApi;
use AlfPHPApi\AlfrescoSearchRestApi\Model\SearchRequest;
use AlfPHPApi\BaseListApi;

/**
 * Class AlfrescoSearchRestApi
 * @package AlfPHPApi\AlfrescoSearchRestApi
 *
 * @property-read SearchApi $searchApi
 * @property-read SearchApi $search
 *
 * @method \GuzzleHttp\Promise\PromiseInterface search(SearchRequest $searchRequest)
 */
class AlfrescoSearchRestApi extends BaseListApi
{
    public static $toLoad = [
        SearchApi::class,
    ];
}