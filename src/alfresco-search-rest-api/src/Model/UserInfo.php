<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 23:23
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class UserInfo extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $id;

    protected static $constructProperties = [
        'displayName' => 'String',
        'id' => 'String'
    ];

    public function __construct($displayName = "", $id = "") {
        $this->displayName = $displayName;
        $this->id = $id;
    }
}