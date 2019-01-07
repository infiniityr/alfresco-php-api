<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 07/09/2018
 * Time: 18:11
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Model;


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