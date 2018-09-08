<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:30
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestQuery extends Model
{
    /**
     * @var string
     */
    public $language = LanguageEnum::afts;

    /**
     * @var string
     */
    public $userQuery;

    /**
     * @var string
     */
    public $query;

    protected static $constructProperties = [
        'language' => 'String',
        'userQuery' => 'String',
        'query' => 'String'
    ];

    public function __construct($query = null, $language = LanguageEnum::afts, $userQuery = null) {
        $this->query = $query;
        $this->language = $language;
        $this->userQuery = $userQuery;
    }
}

class LanguageEnum {
    const afts = "afts";

    const lucene = "lucene";

    const cmis = "cmis";
}