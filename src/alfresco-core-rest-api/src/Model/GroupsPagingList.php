<?php
/**
 * Nom du fichier : GroupsPagingList.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class GroupsPagingList extends Model
{
    /**
     * @var Pagination
     */
    public $pagination;

    protected static $constructProperties = [
        'pagination' => Pagination::class
    ];

    /**
     * GroupsPagingList constructor.
     * @param Pagination $pagination
     */
    public function __construct(Pagination $pagination = null)
    {
        $this->pagination = $pagination;
    }
}