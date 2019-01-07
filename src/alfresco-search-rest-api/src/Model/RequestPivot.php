<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:29
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

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