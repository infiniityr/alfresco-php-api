<?php
/**
 * Nom du fichier : FavoriteSite.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class FavoriteSite extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $visibility;

    const PRIVATE = "PRIVATE";

    const MODERATED = "MODERATED";

    const PUBLIC = "PUBLIC";

    protected static $constructProperties = [
        'id' => 'String',
        'title' => 'String',
        'description' => 'String',
        'visibility' => 'String'
    ];

    /**
     * FavoriteSite constructor.
     * @param string $id
     * @param string $title
     * @param string $visibility
     */
    public function __construct(string $id = null, string $title = null, string $visibility = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->visibility = $visibility;
    }
}