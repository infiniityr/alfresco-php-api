<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 22:44
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class SearchEntry extends Model
{
    /**
     * @var int
     */
    public $score;

    /**
     * @var SearchEntryHighlight[]
     */
    public $highlight;

    protected static $constructProperties = [
        'score' => 'Integer',
        'highlight' => [SearchEntryHighlight::class]
    ];
}