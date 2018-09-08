<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 07/09/2018
 * Time: 21:15
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Model;


class RepositoryInfo extends Model
{
    /**
     * @var string
     */
    public $edition;

    /**
     * @var VersionInfo
     */
    public $version;

    /**
     * @var StatusInfo
     */
    public $status;

    /**
     * @var LicenseInfo
     */
    public $license;

    /**
     * @var ModuleInfo[]
     */
    public $modules;

    protected static $constructProperties = [
        'edition' => 'String',
        'version' => VersionInfo::class,
        'status' => StatusInfo::class,
        'license' => LicenseInfo::class,
        'modules' => [ModuleInfo::class]
    ];
}