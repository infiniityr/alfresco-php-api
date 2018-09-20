<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 18:03
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class UserActionRepresentation extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $newPassword;

    /**
     * @var string
     */
    public $oldPassword;

    protected static $constructProperties = [
        'action' => 'String',
        'newPassword' => 'String',
        'oldPassword' => 'String'
    ];
}