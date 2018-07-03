<?php
/**
 * Nom du fichier : PathInfo.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PathInfo extends Model
{
    /**
     * @var PathElement[]
     */
    public $elements;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $isComplete;

    protected static $constructProperties = [
        'elements' => [PathElement::class],
        'name' => 'String',
        'isComplete' => 'Boolean'
    ];
}