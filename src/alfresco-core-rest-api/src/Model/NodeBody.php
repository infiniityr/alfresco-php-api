<?php
/**
 * Nom du fichier : NodeBody.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class NodeBody extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $relativePath;

    /**
     * @var NodesnodeIdchildrenContent
     */
    public $content;

    /**
     * @var string[]
     */
    public $aspectNames;

    /**
     * @var string[]
     */
    public $properties;

    protected static $constructProperties = [
        'name' => 'String',
        'nodeType' => 'String',
        'relativePath' => 'String',
        'content' => NodesnodeIdchildrenContent::class,
        'aspectNames' => ['String'],
        'properties' => ['String' => 'String']
    ];
}