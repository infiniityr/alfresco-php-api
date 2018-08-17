<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 10:40
 */

namespace AlfPHPApi\AlfrescoAuthRestApi\Model;


class ValidateTicketEntry extends Model
{
    /**
     * @var ValidateTicketEntryEntry
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => ValidateTicketEntryEntry::class
    ];
}