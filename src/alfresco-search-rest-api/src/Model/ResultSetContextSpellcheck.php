<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 22:39
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class ResultSetContextSpellcheck extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $suggestion;

    protected static $constructProperties = [
        'type' => 'String',
        'suggestion' => ['String']
    ];
}

class TypeEnum {
    const searchInsteadFor = "searchInsteadFor";

    const didYouMean = "didYouMean";
}