<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 19:38
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class ErrorError extends Model
{
    /**
     * @var string
     */
    public $errorKey;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var string
     */
    public $briefSummary;

    /**
     * @var string
     */
    public $stackTrace;

    /**
     * @var string
     */
    public $descriptionURL;

    /**
     * @var string
     */
    public $logId;

    protected static $constructProperties = [
        'errorKey' => 'String',
        'statusCode' => 'Integer',
        'briefSummary' => 'String',
        'stackTrace' => 'String',
        'descriptionURL' => 'String',
        'logId' => 'String'
    ];

    public function __construct($statusCode = 500, $briefSummary = '', $stackTrace = '', $descriptionURL = '') {
        $this->statusCode = $statusCode;
        $this->briefSummary = $briefSummary;
        $this->stackTrace = $stackTrace;
        $this->descriptionURL = $descriptionURL;
    }
}