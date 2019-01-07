<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 10:38
 */

namespace AlfPHPApi\AlfrescoAuthRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class LoginTicketEntryEntry extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $userId;

    protected static $constructProperties = [
        'id' => 'String',
        'userId' => 'String'
    ];
}