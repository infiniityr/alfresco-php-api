<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 13:18
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class SystemPropertiesRepresentation extends Model
{
    /**
     * @var bool
     */
    public $allowInvolveByMail;

    protected static $constructProperties = [
        'allowInvolveByMail' => 'Boolean'
    ];
}