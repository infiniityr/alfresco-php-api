<?php
/**
 * Nom du fichier : DownloadBodyCreate.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class DownloadBodyCreate extends Model
{
    /**
     * @var string[]
     */
    public $nodeIds;

    protected static $constructProperties = [
        'nodeIds' => ['String']
    ];

    /**
     * DownloadBodyCreate constructor.
     * @param string[] $nodeIds
     */
    public function __construct(array $nodeIds = [])
    {
        $this->nodeIds = $nodeIds;
    }
}