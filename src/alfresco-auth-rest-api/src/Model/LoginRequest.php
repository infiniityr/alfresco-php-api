<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 10:36
 */

namespace AlfPHPApi\AlfrescoAuthRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class LoginRequest extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $password;

    protected static $constructProperties = [
        'userId' => 'String',
        'password' => 'String'
    ];
}