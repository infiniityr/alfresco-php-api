<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 07/09/2018
 * Time: 21:14
 */

namespace AlfPHPApi\AlfrescoDiscoveryRestApi\Model;


class RepositoryEntry extends Model
{
    /**
     * @var RepositoryInfo
     */
    public $repository;

    protected static $constructProperties = [
        'repository' => RepositoryInfo::class
    ];
}