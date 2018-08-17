<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 10:30
 */

namespace AlfPHPApi\AlfrescoAuthRestApi\Model;


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

    /**
     * ErrorError constructor.
     *
     * @param string $briefSummary
     * @param string $descriptionURL
     * @param string $stackTrace
     * @param int    $statusCode
     */
    public function __construct($briefSummary = null, $descriptionURL = null, $stackTrace = null, $statusCode = null)
    {
        $this->briefSummary = $briefSummary;
        $this->descriptionURL = $descriptionURL;
        $this->stackTrace = $stackTrace;
        $this->statusCode = $statusCode;
    }


}