<?php
/**
 * Nom du fichier : CommentBody1.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class CommentBody1 extends Model
{
    /**
     * @var string
     */
    public $content;

    protected static $constructProperties = [
        'content' => 'String'
    ];

    /**
     * CommentBody1 constructor.
     * @param string $content
     */
    public function __construct(string $content = null)
    {
        $this->content = $content;
    }
}