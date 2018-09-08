<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 07/09/2018
 * Time: 17:52
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Model;


class DiscoveryEntry extends Model
{
    /**
     * @var RepositoryEntry
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => RepositoryEntry::class
    ];
}