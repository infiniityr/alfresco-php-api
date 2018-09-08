<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 07/09/2018
 * Time: 21:18
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Model;


class StatusInfo extends Model
{
    /**
     * @var bool
     */
    public $isReadOnly = false;

    /**
     * @var bool
     */
    public $isAuditEnabled;

    /**
     * @var bool
     */
    public $isQuickShareEnabled;

    /**
     * @var bool
     */
    public $isThumbnailGenerationEnabled;

    protected static $constructProperties = [
        'isReadOnly' => 'Boolean',
        'isAuditEnabled' => 'Boolean',
        'isQuickShareEnabled' => 'Boolean',
        'isThumbnailGenerationEnabled' => 'Boolean'
    ];
}