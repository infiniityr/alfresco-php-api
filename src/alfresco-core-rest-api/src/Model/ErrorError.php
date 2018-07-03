<?php
/**
 * Nom du fichier : ErrorError.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


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
     * @param string $briefSummary
     * @param string $descriptionURL
     * @param string $stackTrace
     * @param int $statusCode
     */
    public function __construct(string $briefSummary = null, string $descriptionURL = null, string $stackTrace = null, int $statusCode = null)
    {
        $this->briefSummary = $briefSummary;
        $this->descriptionURL = $descriptionURL;
        $this->stackTrace = $stackTrace;
        $this->statusCode = $statusCode;
    }
}