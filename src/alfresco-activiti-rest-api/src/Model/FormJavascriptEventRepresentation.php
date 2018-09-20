<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 19:53
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class FormJavascriptEventRepresentation extends Model
{
    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $javascriptLogic;

    protected static $constructProperties = [
        'event' => 'String',
        'javascriptLogic' => 'String'
    ];
}