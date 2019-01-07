<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 08/09/2018
 * Time: 15:10
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class AppDefinition extends Model
{
    /**
     * @var string
     */
    public $icon;

    /**
     * @var AppModelDefinition[]
     */
    public $models;

    /**
     * @var PublishIdentityInfoRepresentation[]
     */
    public $publishIdentityInfo;

    /**
     * @var string
     */
    public $theme;

    protected static $constructProperties = [
        'icon' => 'String',
        'models' => [AppModelDefinition::class],
        'publishIdentityInfo' => [PublishIdentityInfoRepresentation::class],
        'theme' => 'String'
    ];
}