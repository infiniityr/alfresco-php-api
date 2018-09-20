<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 18:04
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class UserFilterOrderRepresentation extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var int[]
     */
    public $order;

    protected static $constructProperties = [
        'appId' => 'Integer',
        'order' => ['Integer']
    ];
}