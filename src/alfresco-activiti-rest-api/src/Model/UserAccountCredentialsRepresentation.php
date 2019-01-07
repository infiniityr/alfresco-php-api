<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 18:02
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class UserAccountCredentialsRepresentation extends Model
{
    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $username;

    protected static $constructProperties = [
        'password' => 'String',
        'username' => 'String'
    ];
}