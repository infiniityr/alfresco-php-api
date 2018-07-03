<?php
/**
 * Nom du fichier : RatingAggregate.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class RatingAggregate extends Model
{
    /**
     * @var int
     */
    public $average;

    /**
     * @var int
     */
    public $numberOfRatings;

    protected static $constructProperties = [
        'average' => 'Integer',
        'numberOfRatings' => 'Integer'
    ];

    /**
     * RatingAggregate constructor.
     * @param int $numberOfRatings
     */
    public function __construct(int $numberOfRatings = null)
    {
        $this->numberOfRatings = $numberOfRatings;
    }
}