<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 10:37
 */

namespace AlfPHPApi\AlfrescoAuthRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class LoginTicketEntry extends Model
{
    /**
     * @var LoginTicketEntryEntry
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => LoginTicketEntryEntry::class
    ];
}