<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 07/09/2018
 * Time: 18:12
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Model;


class ErrorError extends Model
{
    /**
     * @var string
     */
    public $errorKey;

    /**
     * @var string
     */
    public $briefSummary;

    /**
     * @var string
     */
    public $descriptionURL;

    /**
     * @var string
     */
    public $logId;

    /**
     * @var string
     */
    public $stackTrace;

    /**
     * @var int
     */
    public $statusCode;

    protected static $constructProperties = [
        'errorKey' => 'String',
        'briefSummary' => 'String',
        'descriptionURL' => 'String',
        'logId' => 'String',
        'stackTrace' => 'String',
        'statusCode' => 'Integer'
    ];
}