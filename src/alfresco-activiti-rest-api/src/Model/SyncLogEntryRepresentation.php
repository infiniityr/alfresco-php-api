<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 13:16
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class SyncLogEntryRepresentation extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var \DateTime
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $type;

    protected static $constructProperties = [
        'id' => 'Integer',
        'timeStamp' => 'Date',
        'type' => 'String'
    ];
}