<?php
/**
 * Nom du fichier : RatingBody.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class RatingBody extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $myRating;

    const LIKES = "likes";

    const FIVESTAR = "fiveStar";

    protected static $constructProperties = [
        'id' => 'String',
        'myRating' => 'String'
    ];

    /**
     * RatingBody constructor.
     * @param string $id
     * @param string $myRating
     */
    public function __construct(string $id = null, string $myRating = null)
    {
        $this->id = $id;
        $this->myRating = $myRating;
    }
}