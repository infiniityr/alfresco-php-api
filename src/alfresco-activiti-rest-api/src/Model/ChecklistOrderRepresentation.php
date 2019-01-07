<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 12/09/2018
 * Time: 16:46
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ChecklistOrderRepresentation extends Model
{
    /**
     * @var string[]
     */
    public $order;

    protected static $constructProperties = [
        'order' => ['String']
    ];
}