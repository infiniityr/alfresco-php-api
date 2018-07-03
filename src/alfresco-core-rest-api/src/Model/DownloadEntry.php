<?php
/**
 * Nom du fichier : DownloadEntry.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class DownloadEntry extends Model
{
    /**
     * @var Download
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => Download::class
    ];

    /**
     * DownloadEntry constructor.
     * @param Download $entry
     */
    public function __construct(Download $entry = null)
    {
        $this->entry = $entry;
    }
}