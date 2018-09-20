<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 22:48
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class LightAppRepresentation extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $theme;

    protected static $constructProperties = [
        'description' => 'String',
        'icon' => 'String',
        'id' => 'Integer',
        'name' => 'String',
        'theme' => 'String'
    ];
}