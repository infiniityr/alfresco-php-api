<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 03/09/2018
 * Time: 19:36
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class Error extends Model
{
    /**
     * @var ErrorError
     */
    public $error;

    protected static $constructProperties = [
        'error' => ErrorError::class,
    ];

    public function __construct($error = null) {
        $this->error = $error;
    }
}