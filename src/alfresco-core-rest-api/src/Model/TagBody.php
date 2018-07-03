<?php
/**
 * Nom du fichier : TagBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class TagBody extends Model
{
    /**
     * @var string
     */
    public $tag;

    protected static $constructProperties = [
        'tag' => 'String'
    ];

    /**
     * TagBody constructor.
     * @param string $tag
     */
    public function __construct(string $tag = null)
    {
        $this->tag = $tag;
    }
}