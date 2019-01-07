<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 12:59
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ReportDateRangeRepresentation extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $rangeId;

    /**
     * @var string
     */
    public $startDate;

    protected static $constructProperties = [
        'endDate' => 'String',
        'rangeId' => 'Integer',
        'startDate' => 'String'
    ];
}