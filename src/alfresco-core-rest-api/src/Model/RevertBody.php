<?php
/**
 * Nom du fichier : RevertBody.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class RevertBody extends Model
{
    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var string
     */
    public $comment;

    protected static $constructProperties = [
        'majorVersion' => 'String',
        'comment' => 'String'
    ];

    /**
     * RevertBody constructor.
     * @param string $majorVersion
     * @param string $comment
     */
    public function __construct(string $majorVersion = null, string $comment = null)
    {
        $this->majorVersion = $majorVersion;
        $this->comment = $comment;
    }
}