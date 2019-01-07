<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 19:54
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class FormOutcomeRepresentation extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    protected static $constructProperties = [
        'id' => 'String',
        'name' => 'String'
    ];
}