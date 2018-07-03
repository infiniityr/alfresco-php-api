<?php
/**
 * Nom du fichier : Tag.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Tag extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $tag;

    protected static $constructProperties = [
        'id' => 'String',
        'tag' => 'String'
    ];

    /**
     * Tag constructor.
     * @param string $id
     * @param string $tag
     */
    public function __construct(string $id = null, string $tag = null)
    {
        $this->id = $id;
        $this->tag = $tag;
    }
}