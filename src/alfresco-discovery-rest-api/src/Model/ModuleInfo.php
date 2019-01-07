<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 07/09/2018
 * Time: 18:18
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ModuleInfo extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $version;

    /**
     * @var \DateTime
     */
    public $installDate;

    /**
     * @var string
     */
    public $installState;

    /**
     * @var string
     */
    public $versionMin;

    /**
     * @var string
     */
    public $versionMax;

    protected static $constructProperties = [
        'id' => 'String',
        'title' => 'String',
        'description' => 'String',
        'version' => 'String',
        'installDate' => 'Date',
        'installState' => 'String',
        'versionMin' => 'String',
        'versionMax' => 'String'
    ];
}