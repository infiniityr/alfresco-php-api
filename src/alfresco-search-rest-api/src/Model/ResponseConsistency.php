<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:55
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ResponseConsistency extends Model
{
    /**
     * @var int
     */
    public $lastTxId;

    protected static $constructProperties = [
        'lastTxId' => 'Integer'
    ];
}