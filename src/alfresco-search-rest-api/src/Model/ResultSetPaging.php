<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 22:41
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class ResultSetPaging extends Model
{
    /**
     * @var ResultSetPagingList
     */
    public $list;

    protected static $constructProperties = [
        'list' => ResultSetPagingList::class
    ];
}