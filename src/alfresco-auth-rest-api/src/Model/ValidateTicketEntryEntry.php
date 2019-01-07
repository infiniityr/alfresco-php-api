<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 10:41
 */

namespace AlfPHPApi\AlfrescoAuthRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ValidateTicketEntryEntry extends Model
{
    /**
     * @var string
     */
    public $id;

    protected static $constructProperties = [
        'id' => 'String'
    ];
}