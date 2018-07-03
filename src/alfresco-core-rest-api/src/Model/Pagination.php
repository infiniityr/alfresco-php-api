<?php
/**
 * Nom du fichier : Pagination.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


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

    /**
     * Pagination constructor.
     * @param int $count
     * @param bool $hasMoreItems
     * @param int $skipCount
     * @param int $maxItems
     */
    public function __construct(int $count = null, bool $hasMoreItems = false, int $skipCount = null, int $maxItems = null)
    {
        $this->count = $count;
        $this->hasMoreItems = $hasMoreItems;
        $this->skipCount = $skipCount;
        $this->maxItems = $maxItems;
    }
}