<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 13:15
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class SaveFormRepresentation extends Model
{
    /**
     * @var array
     */
    public $values;

    protected static $constructProperties = [
        'values' => 'Array'
    ];
}