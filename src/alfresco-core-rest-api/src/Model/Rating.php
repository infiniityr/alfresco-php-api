<?php
/**
 * Nom du fichier : Rating.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Rating extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var RatingAggregate
     */
    public  $aggregate;

    /**
     * @var \DateTime
     */
    public $ratedAt;

    /**
     * @var string
     */
    public $myRating;

    protected static $constructProperties = [
        'id' => 'String',
        'aggregate' => RatingAggregate::class,
        'ratedAt' => 'Date',
        'myRating' => 'string'
    ];

    /**
     * Rating constructor.
     * @param string $id
     */
    public function __construct(string $id = null)
    {
        $this->id = $id;
    }
}