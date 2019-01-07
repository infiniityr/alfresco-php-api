<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 10:29
 */

namespace AlfPHPApi\AlfrescoAuthRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class Error extends Model
{
    /**
     * @var ErrorError
     */
    public $error;

    protected static $constructProperties = [
        'error' => ErrorError::class
    ];
}