<?php
/**
 * Nom du fichier : Download.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Download extends Model
{
    /**
     * @var int
     */
    public $filesAdded;

    /**
     * @var int
     */
    public $bytesAdded;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $totalFiles;

    /**
     * @var int
     */
    public $totalBytes;

    /**
     * @var string
     */
    public $status;

    const PENDING = "PENDING";

    const CANCELLED = "CANCELLED";

    const IN_PROGRESS = "IN_PROGRESS";

    const DONE = "DONE";

    const MAX_CONTENT_SIZE_EXCEEDED = "MAX_CONTENT_SIZE_EXCEEDED";

    protected static $constructProperties = [
        'filesAdded' => 'Integer',
        'bytesAdded' => 'Integer',
        'id' => 'String',
        'totalFiles' => 'Integer',
        'totalBytes' => 'Integer',
        'status' => 'String'
    ];
}