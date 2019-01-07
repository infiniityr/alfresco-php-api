<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 12/09/2018
 * Time: 16:22
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class BoxUserAccountCredentialsRepresentation extends Model
{
    /**
     * @var string
     */
    public $authenticationURL;

    /**
     * @var \DateTime
     */
    public $expireDate;

    /**
     * @var string
     */
    public $ownerEmail;

    protected static $constructProperties = [
        'authenticationURL' => 'String',
        'expireDate' => 'Date',
        'ownerEmail' => 'String'
    ];
}