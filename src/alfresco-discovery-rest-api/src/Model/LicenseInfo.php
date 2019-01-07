<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 07/09/2018
 * Time: 18:16
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class LicenseInfo extends Model
{
    /**
     * @var \DateTime
     */
    public $issuedAt;

    /**
     * @var \DateTime
     */
    public $expiresAt;

    /**
     * @var int
     */
    public $remainingDays;

    /**
     * @var string
     */
    public $holder;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var EntitlementsInfo
     */
    public $entitlements;

    protected static $constructProperties = [
        'issuedAt' => 'Date',
        'expiresAt' => 'Date',
        'remainingDays' => 'Integer',
        'holder' => 'String',
        'mode' => 'String',
        'entitlements' => EntitlementsInfo::class
    ];
}