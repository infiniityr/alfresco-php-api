<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:25
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class RequestLimits extends Model
{
    /**
     * @var int
     */
    public $permissionEvaluationTime;

    /**
     * @var int
     */
    public $permissionEvaluationCount;

    protected static $constructProperties = [
        'permissionEvaluationTime' => 'Integer',
        'permissionEvaluationCount' => 'Intege'
    ];

    /**
     * RequestLimits constructor.
     *
     * @param int $permissionEvaluationTime
     * @param int $permissionEvaluationCount
     */
    public function __construct(int $permissionEvaluationTime = null, int $permissionEvaluationCount = null)
    {
        $this->permissionEvaluationTime = $permissionEvaluationTime;
        $this->permissionEvaluationCount = $permissionEvaluationCount;
    }


}