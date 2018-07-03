<?php
/**
 * Nom du fichier : Favorite.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Favorite extends Model
{
    /**
     * @var string
     */
    public $targetGuid;

    /**
     * @var \DateTime
     */
    public $createdAt;

    /**
     * @var array
     */
    public $target;

    protected static $constructProperties = [
        'targetGuid' => 'String',
        'createdAt' => 'Date',
        'target' => 'Array'
    ];

    /**
     * Favorite constructor.
     * @param string $targetGuid
     * @param array $target
     */
    public function __construct(string $targetGuid = null, array $target = [])
    {
        $this->targetGuid = $targetGuid;
        $this->target = $target;
    }
}