<?php

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class SiteContainer extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $folderId;

    protected static $constructProperties = [
        'id' => 'String',
        'folderId' => 'String'
    ];

    /**
     * SiteContainer constructor.
     * @param string $id
     * @param string $folderId
     */
    public function __construct(string $id = null, string $folderId = null)
    {
        $this->id = $id;
        $this->folderId = $folderId;
    }


}