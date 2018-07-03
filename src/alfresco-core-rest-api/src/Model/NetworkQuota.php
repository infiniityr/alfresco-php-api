<?php
/**
 * Nom du fichier : NetworkQuota.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NetworkQuota extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $usage;

    protected static $constructProperties = [
        'id' => 'String',
        'limit' => 'Integer',
        'usage' => 'Integer'
    ];

    /**
     * NetworkQuota constructor.
     * @param string $id
     * @param int $limit
     * @param int $usage
     */
    public function __construct(string $id = null, int $limit = null, int $usage = null)
    {
        $this->id = $id;
        $this->limit = $limit;
        $this->usage = $usage;
    }
}