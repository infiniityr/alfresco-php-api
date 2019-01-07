<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 13:06
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ReportSaveQueryRepresentation extends Model
{
    /**
     * @var string
     */
    public $processDefinitionId;

    /**
     * @var string
     */
    public $reportName;

    /**
     * @var int
     */
    public $slowProcessInstanceInteger;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $typeFiltering;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $dateRangeInterval;

    /**
     * @var ReportDateRangeRepresentation
     */
    public $dateRange;

    protected static $constructProperties = [
        'processDefinitionId' => 'String',
        'reportName' => 'String',
        'slowProcessSInstanceInteger' => 'Integer',
        'status' => 'String',
        'created' => 'String',
        'typeFiltering' => 'String',
        'duration' => 'String',
        'taskName' => 'String',
        'dateRangeInterval' => 'String',
        'dateRange' => ReportDateRangeRepresentation::class
    ];
}