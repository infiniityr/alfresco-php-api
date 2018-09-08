<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:29
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestPivot extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var RequestPivot[]
     */
    public $pivots;

    protected static $constructProperties = [
        'key' => 'String',
        'pivots' => [RequestPivot::class]
    ];
}