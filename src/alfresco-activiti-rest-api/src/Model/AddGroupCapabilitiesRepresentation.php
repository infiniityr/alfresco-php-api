<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 08/09/2018
 * Time: 15:09
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class AddGroupCapabilitiesRepresentation extends Model
{
    /**
     * @var string[]
     */
    public $capabilities;

    protected static $constructProperties = [
        'capabilities' => ['String']
    ];
}