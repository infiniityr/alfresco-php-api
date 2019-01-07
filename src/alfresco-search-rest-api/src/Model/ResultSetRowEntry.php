<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 22:43
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


use AlfPHPApi\AlfrescoCoreRestApi\Model\Model;

class ResultSetRowEntry extends Model
{
    /**
     * @var ResultNode
     */
    public $entry;

    protected static $constructProperties = [
        'entry' => ResultNode::class
    ];
}