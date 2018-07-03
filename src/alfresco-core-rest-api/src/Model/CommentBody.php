<?php
/**
 * Nom du fichier : CommentBody.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class CommentBody extends Model
{
    /**
     * @var string
     */
    public $content;

    protected static $constructProperties = [
        'content' => 'String'
    ];

    /**
     * CommentBody constructor.
     * @param string $content
     */
    public function __construct(string $content = null)
    {
        $this->content = $content;
    }
}