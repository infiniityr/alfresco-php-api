<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 13:07
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ResetPasswordRepresentation extends Model
{
    /**
     * @var string
     */
    public $email;

    protected static $constructProperties = [
        'email' => 'String'
    ];
}