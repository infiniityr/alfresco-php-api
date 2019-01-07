<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 07/09/2018
 * Time: 18:08
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class EntitlementsInfo extends Model
{
    /**
     * @var int
     */
    public $maxUsers;

    /**
     * @var int
     */
    public $maxDocs;

    /**
     * @var bool
     */
    public $isClusterEnabled;

    /**
     * @var bool
     */
    public $isCryptodocEnabled;

    protected static $constructProperties = [
        'maxUsers' => 'Integer',
        'maxDocs' => 'Integer',
        'isClusterEnabled' => 'Boolean',
        'isCryptodocEnabled' => 'Boolean'
    ];
}