<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 23:13
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestSpellcheck extends Model
{
    /**
     * @var string
     */
    public $query;

    protected static $constructProperties = [
        'query' => 'String'
    ];

    /**
     * RequestSpellcheck constructor.
     *
     * @param string $query
     */
    public function __construct(string $query = null) { $this->query = $query;}
}