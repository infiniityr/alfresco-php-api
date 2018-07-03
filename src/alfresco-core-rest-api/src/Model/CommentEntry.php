<?php
/**
 * Nom du fichier : CommentEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class CommentEntry extends Model
{
    /**
     * @var Comment
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Comment::class
    ];

    /**
     * CommentEntry constructor.
     * @param Comment $entry
     */
    public function __construct(Comment $entry = null)
    {
        $this->entry = $entry;
    }
}