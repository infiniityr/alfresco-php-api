<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:26
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestLocalization extends Model
{
    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string[]
     */
    public $locales;

    protected static $constructProperties = [
        'timezone' => 'String',
        'locales' => ['String']
    ];
}