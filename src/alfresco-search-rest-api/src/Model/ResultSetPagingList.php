<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 22:42
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class ResultSetPagingList extends Model
{
    /**
     * @var Pagination
     */
    public $pagination;

    /**
     * @var ResultSetContext
     */
    public $context;

    /**
     * @var ResultSetRowEntry[]
     */
    public $entries;

    protected static $constructProperties = [
        'pagination' => Pagination::class,
        'context' => ResultSetContext::class,
        'entries' => [ResultSetRowEntry::class]
    ];
}