<?php

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;

use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

/**
 * The Site model
 * @package AlfPHPApi\AlfrescoCoreRestApi\Model
 * @version 0.0.1
 */
class Site extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * Must be one of those 3 constant : <br/>
     * PRIVATE<br/>
     * MODERATED<br/>
     * PUBLIC
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $role;

    const PRIVATE = "PRIVATE";

    const MODERATED = "MODERATED";

    const PUBLIC = "PUBLIC";

    protected static $constructProperties = [
        'id' => 'String',
        'guid' => 'String',
        'title' => 'String',
        'description' => 'String',
        'visibility' => 'String',
        'role' => 'String'
    ];

    /**
     * <code>Site</code> constructor.
     * @param string|null $id
     * @param string|null $guid
     * @param string|null $title
     * @param string $visibility
     */
    public function __construct($id = null, $guid = null, $title = null, $visibility = self::PRIVATE)
    {
        $this->id = $id;
        $this->guid = $guid;
        $this->title = $title;
        $this->visibility = $visibility;
    }
}