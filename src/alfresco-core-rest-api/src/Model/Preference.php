<?php
/**
 * Nom du fichier : Preference.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Preference extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $value;

    protected static $constructProperties = [
        'id' => 'String',
        'value' => 'String'
    ];

    /**
     * Preference constructor.
     * @param string $id
     * @param string $value
     */
    public function __construct(string $id = null, string $value = null)
    {
        $this->id = $id;
        $this->value = $value;
    }
}