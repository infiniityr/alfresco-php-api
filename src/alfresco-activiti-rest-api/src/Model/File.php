<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 17/09/2018
 * Time: 16:14
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class File extends Model
{
    /**
     * @var bool
     */
    public $absolute;

    /**
     * @var File
     */
    public $absoluteFile;

    /**
     * @var string
     */
    public $absolutePath;

    /**
     * @var File
     */
    public $canonicalFile;

    /**
     * @var string
     */
    public $canonicalPath;

    /**
     * @var bool
     */
    public $directory;

    /**
     * @var bool
     */
    public $file;

    /**
     * @var int
     */
    public $freeSpace;

    /**
     * @var bool
     */
    public $hidden;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parent;

    /**
     * @var File
     */
    public $parentFile;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $totalSpace;

    /**
     * @var int
     */
    public $usableSpace;

    protected static $constructProperties = [
        'absolute' => 'Boolean',
        'absoluteFile' => File::class,
        'absolutePath' => 'String',
        'canonicalFile' => File::class,
        'canonicalPath' => 'String',
        'directory' => 'Boolean',
        'file' => 'Boolean',
        'freeSpace' => 'Integer',
        'hidden' => 'Boolean',
        'name' => 'String',
        'parent' => 'String',
        'parentFile' => File::class,
        'path' => 'String',
        'totalSpace' => 'Integer',
        'usableSpace' => 'Integer'
    ];
}