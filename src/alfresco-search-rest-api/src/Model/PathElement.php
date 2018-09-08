<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 20:14
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class PathElement extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    protected static $constructProperties = [
        'id' => 'String',
        'name' => 'String'
    ];
}