<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 12:52
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class RelatedContentRepresentation extends Model
{
    /**
     * @var bool
     */
    public $contentAvailable;

    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var LightUserRepresentation
     */
    public $createdBy;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $link;

    /**
     * @var string
     */
    public $linkUrl;

    /**
     * @var string
     */
    public $mimeType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $previewStatus;

    /**
     * @var string
     */
    public $simpleType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $thumbnailStatus;

    protected static $constructProperties = [
        'contentAvailable' => 'Boolean',
        'created' => 'Date',
        'createdBy' => LightUserRepresentation::class,
        'id' => 'Integer',
        'link' => 'Boolean',
        'linkUrl' => 'String',
        'mimeType' => 'String',
        'name' => 'String',
        'previewStatus' => 'String',
        'simpleType' => 'String',
        'source' => 'String',
        'sourceId' => 'String',
        'thumbnailStatus' => 'String'
    ];
}