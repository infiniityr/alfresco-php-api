<?php

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;

use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;

/**
 * The SiteBody model
 * @package AlfPHPApi\AlfrescoCoreRestApi\Model
 * @version 0.0.1
 */
class SiteBody extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $visibility;

    const PUBLIC = "PUBLIC";

    const PRIVATE = "PRIVATE";

    const MODERATED = "MODERATED";

    protected static $constructProperties = [
        'id' => 'String',
        'title' => 'String',
        'description' => 'String',
        'visibility' => 'String',
    ];

    /**
     * SiteBody constructor.
     * @param string $title
     * @param string $visibility
     */
    public function __construct(string $title = null, string $visibility = self::PUBLIC)
    {
        $this->title = $title;
        $this->visibility = $visibility;
    }
}