<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 23:15
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestHighlight extends Model
{
    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $postfix;

    /**
     * @var int
     */
    public $snippetCount;

    /**
     * @var int
     */
    public $fragmentSize;

    /**
     * @var int
     */
    public $maxAnalyzedChars;

    /**
     * @var bool
     */
    public $mergeContiguous;

    /**
     * @var bool
     */
    public $usePhraseHighlighter;

    /**
     * @var RequestHighlightFields[]
     */
    public $fields;

    protected static $constructProperties = [
        'prefix' => 'String',
        'postfix' => 'String',
        'snippetCount' => 'Integer',
        'fragmentSize' => 'Integer',
        'maxAnalyzedChars' => 'Integer',
        'mergeContiguous' => 'Boolean',
        'usePhraseHighlighter' => 'Boolean',
        'fields' => [RequestHighlightFields::class]
    ];
}