<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 22:45
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class SearchEntryHighlight extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string[]
     */
    public $snippets;

    protected static $constructProperties = [
        'field' => 'String',
        'snippets' => ['String']
    ];
}