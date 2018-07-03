<?php
/**
 * Nom du fichier : Person.php
 * Projet : alfresco-php-api
 * Date : 17/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Person extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $avatarId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $skypeId;

    /**
     * @var string
     */
    public $googleId;

    /**
     * @var string
     */
    public $instantMessageId;

    /**
     * @var string
     */
    public $jobTitle;

    /**
     * @var string
     */
    public $location;

    /**
     * @var Company
     */
    public $company;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var \DateTime
     */
    public $statusUpdatedAt;

    /**
     * @var string
     */
    public $userStatus;

    /**
     * @var bool
     */
    public $enabled = true;

    /**
     * @var bool
     */
    public $emailNotificationsEnabled;

    protected static $constructProperties = [
        'id' => 'String',
        'firstName' => 'String',
        'lastName' => 'String',
        'description' => 'String',
        'avatarId' => 'String',
        'email' => 'String',
        'skypeId' => 'String',
        'googleId' => 'String',
        'instantMessageId' => 'String',
        'jobTitle' => 'String',
        'location' => 'String',
        'company' => Company::class,
        'mobile' => 'String',
        'telephone' => 'String',
        'statusUpdatedAt' => 'Date',
        'userStatus' => 'String',
        'enabled' => 'Boolean',
        'emailNotificationsEnabled' => 'Boolean'
    ];

    /**
     * Person constructor.
     * @param string $id
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param bool $enabled
     */
    public function __construct(string $id = null, string $firstName = null, string $lastName = null, string $email = null, bool $enabled = true)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->enabled = $enabled;
    }
}