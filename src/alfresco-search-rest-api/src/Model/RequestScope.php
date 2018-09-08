<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:37
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestScope extends Model
{
    /**
     * @var string
     */
    public $locations;

    protected static $constructProperties = [
        'locations' => 'String',
    ];
}

class LocationsEnum {
    const nodes = "nodes";

    const version = "versions";

    const deleted_nodes = "deleted-nodes";
}