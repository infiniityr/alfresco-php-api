<?php
/**
 * Nom du fichier : PersonNetwork.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class PersonNetwork extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $homeNetwork;

    /**
     * @var bool
     */
    public $isEnabled;

    /**
     * @var \DateTime
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $paidNetwork;

    /**
     * @var string
     */
    public $subscriptionLevel;

    /**
     * @var NetworkQuota[]
     */
    public $quotas;

    const FREE = "Free";

    const STANDARD = "Standard";

    const ENTERPRISE = "Enterprise";

    protected static $constructProperties = [
        'id' => 'String',
        'homeNetwork' => 'Boolean',
        'isEnabled' => 'Boolean',
        'createdAt' => 'Date',
        'paidNetwork' => 'Boolean',
        'subscriptionLevel' => 'String',
        'quotas' => [NetworkQuota::class]
    ];
}