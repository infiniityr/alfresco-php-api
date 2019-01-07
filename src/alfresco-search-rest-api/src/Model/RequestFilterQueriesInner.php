<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 23:06
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RequestFilterQueriesInner extends Model
{
    /**
     * @var string
     */
    public $query;

    /**
     * @var string[]
     */
    public $tags;

    protected static $constructProperties = [
        'query' => 'String',
        'tags' => ['String']
    ];

    /**
     * RequestFilterQueriesInner constructor.
     *
     * @param string   $query
     * @param string[] $tags
     */
    public function __construct(string $query = null, array $tags = null)
    {
        $this->query = $query;
        $this->tags = $tags;
    }
}