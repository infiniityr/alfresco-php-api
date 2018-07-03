<?php
/**
 * Nom du fichier : InlineResponse201Entry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class InlineResponse201Entry extends Model
{
    /**
     * @var string
     */
    public $id;

    protected static $constructProperties = [
        'id' => 'String'
    ];

    /**
     * InlineResponse201Entry constructor.
     * @param string $id
     */
    public function __construct(string $id = null)
    {
        $this->id = $id;
    }
}