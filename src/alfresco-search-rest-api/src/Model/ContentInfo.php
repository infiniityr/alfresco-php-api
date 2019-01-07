<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 19:31
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ContentInfo extends Model
{
    /**
     * @var string
     */
    public $mimeType;

    /**
     * @var string
     */
    public $mimeTypeName;

    /**
     * @var int
     */
    public $sizeInBytes;

    /**
     * @var string
     */
    public $encoding;

    /**
     * @var string
     */
    public $mimeTypeGroup;

    protected static $constructProperties = [
        'mimeType' => 'String',
        'mimeTypeName' => 'String',
        'sizeInBytes' => 'Integer',
        'encoding' => 'String',
        'mimeTypeGroup' => 'String'
    ];

    public function __construct($mimeType = '', $mimeTypeName = '', $sizeInBytes = 0) {
        $this->mimeType = $mimeType;
        $this->mimeTypeName = $mimeTypeName;
        $this->sizeInBytes = $sizeInBytes;
    }
}