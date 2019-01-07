<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:28
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RequestPagination extends Model
{
    /**
     * @var int
     */
    public $maxItems;

    /**
     * @var int
     */
    public $skipCount;

    protected static $constructProperties = [
        'maxItems' => 'Integer',
        'skipCount' => 'Integer'
    ];

    /**
     * RequestPagination constructor.
     *
     * @param int $maxItems
     * @param int $skipCount
     */
    public function __construct(int $maxItems = null, int $skipCount = null)
    {
        $this->maxItems = $maxItems;
        $this->skipCount = $skipCount;
    }


}