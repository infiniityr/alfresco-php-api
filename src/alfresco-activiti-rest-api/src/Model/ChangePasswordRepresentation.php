<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 12/09/2018
 * Time: 16:27
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ChangePasswordRepresentation extends Model
{
    /**
     * @var string
     */
    public $newPassword;

    /**
     * @var string
     */
    public $oldPassword;

    protected static $constructProperties = [
        'newPassword' => 'String',
        'oldPassword' => 'String'
    ];
}