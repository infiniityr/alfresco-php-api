<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:10
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class Pagination extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var bool
     */
    public $hasMoreItems;

    /**
     * @var int
     */
    public $totalItems;

    /**
     * @var int
     */
    public $skipCount;

    /**
     * @var int
     */
    public $maxItems;

    protected static $constructProperties = [
        'count' => 'Integer',
        'hasMoreItems' => 'Boolean',
        'totalItems' => 'Integer',
        'skipCount' => 'Integer',
        'maxItems' => 'Integer'
    ];

    public function __construct($count = 0, $hasMoreItems = false, $skipCount = 0, $maxItems = 50) {
        $this->count = $count;
        $this->hasMoreItems = $hasMoreItems;
        $this->skipCount = $skipCount;
        $this->maxItems = $maxItems;
    }
}