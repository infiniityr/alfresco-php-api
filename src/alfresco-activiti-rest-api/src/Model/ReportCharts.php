<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 12:58
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ReportCharts extends Model
{
    /**
     * @var Chart[]
     */
    public $elements;

    protected static $constructProperties = [
        'elements' => [Chart::class]
    ];
}