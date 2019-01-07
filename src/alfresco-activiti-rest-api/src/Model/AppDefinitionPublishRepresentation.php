<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 12/09/2018
 * Time: 15:38
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class AppDefinitionPublishRepresentation extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $force;

    protected static $constructProperties = [
        'comment' => 'String',
        'force' => 'Boolean'
    ];
}