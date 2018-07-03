<?php
/**
 * Nom du fichier : RatingEntry.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class RatingEntry extends Model
{
    /**
     * @var Rating
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Rating::class
    ];

    /**
     * RatingEntry constructor.
     * @param Rating $entry
     */
    public function __construct(Rating $entry = null)
    {
        $this->entry = $entry;
    }
}