<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 07/09/2018
 * Time: 21:20
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Model;


class VersionInfo extends Model
{
    /**
     * @var string
     */
    public $major;

    /**
     * @var string
     */
    public $minor;

    /**
     * @var string
     */
    public $patch;

    /**
     * @var string
     */
    public $hotfix;

    /**
     * @var int
     */
    public $schema;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $display;

    protected static $constructProperties = [
        'major' => 'String',
        'minor' => 'String',
        'patch' => 'String',
        'hotfix' => 'String',
        'schema' => 'Integer',
        'label' => 'String',
        'display' => 'String'
    ];
}