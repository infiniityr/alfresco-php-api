<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 23:28
 */

use \PHPUnit\Framework\TestCase;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\SearchRequest;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestQuery;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\LanguageEnum;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestPagination;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestLimits;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestScope;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestInclude;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestFields;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestSortDefinition;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestSortDefinitionInner;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestTemplates;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestTemplatesInner;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestSpellcheck;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestDefaults;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestFilterQueries;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestFilterQueriesInner;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestFacetQueries;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestFacetQueriesInner;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestFacetFields;
use \AlfPHPApi\AlfrescoSearchRestApi\Model\RequestFacetField;

class SearchApiTest extends TestCase
{
    public function testSimpleRequest() {
        $searchRequest = new SearchRequest();
        $searchRequest->query = new RequestQuery("select * from cmis:folder", LanguageEnum::cmis);

        $expected = [
            'query' => [
                'query' => "select * from cmis:folder",
                'language' => 'cmis'
            ]
        ];

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($searchRequest));
    }

    public function testFullRequest() {
        $searchRequest = new SearchRequest();
        $searchRequest->query = new RequestQuery("select * from cmis:folder", LanguageEnum::cmis);
        $searchRequest->paging = new RequestPagination(50, 28);
        $searchRequest->limits = new RequestLimits(20000, 2000);
        //$searchRequest->scope = new RequestScope();
        $searchRequest->include = new RequestInclude(["aspectNames", "properties", "isLink"]);
        $searchRequest->fields = new RequestFields(["id", "name", "search"]);
        $searchRequest->sort = new RequestSortDefinition([new RequestSortDefinitionInner("FIELD", "cm:description", true)]);
        $searchRequest->templates = new RequestTemplates([new RequestTemplatesInner("_PERSON", "|%firstName OR |%lastName OR |%userName"),
                                                          new RequestTemplatesInner("mytemplate", "%cm:content")]);
        $searchRequest->spellcheck = new RequestSpellcheck("alfrezco");
        $searchRequest->defaults = new RequestDefaults(["cm:content", "cm:name"], "AND", "OR", "cm", "PATH");
        $searchRequest->filterQueries = new RequestFilterQueries([new RequestFilterQueriesInner("TYPE:'cm:folder'"),
                                                                  new RequestFilterQueriesInner("cm:creator:mjackson")]);
        $searchRequest->facetQueries = new RequestFacetQueries([new RequestFacetQueriesInner("created:2016", "CreatedThisYear")]);
        $facetField1 = new RequestFacetField("creator");
        $facetField1->mincount = 1;
        $facetField2 = new RequestFacetField("modifier");
        $facetField2->mincount = 1;
        $searchRequest->facetFields = new RequestFacetFields([$facetField1, $facetField2]);

        $expected = [
            'query' => [
                'query' => "select * from cmis:folder",
                'language' => 'cmis'
            ],
            'paging' => [
                'maxItems' => 50,
                'skipCount' => 28
            ],
            'limits' => [
                'permissionEvaluationTime' => 20000,
                'permissionEvaluationCount' => 2000
            ],
            "include" => [
                "aspectNames", "properties", "isLink"
            ],
            "fields" => [
                "id", "name", "search"
            ],
            "sort" => [
                [
                    "type" => "FIELD",
                    "field" => "cm:description",
                    "ascending" => true
                ]
            ],
            "templates" => [
                ["name" => "_PERSON",
                    "template" => "|%firstName OR |%lastName OR |%userName"],
                ["name" => "mytemplate",
                    "template" => "%cm:content"]
            ],
            "spellcheck" => [
                "query" => "alfrezco"
            ],
            "defaults" => [
                "textAttributes" => [
                    "cm:content", "cm:name"
                ],
                "defaultFTSOperator" => "AND",
                "defaultFTSFieldOperator" => "OR",
                "namespace" => "cm",
                "defaultFieldName" => "PATH"
            ],
            "filterQueries" => [
                ["query" => "TYPE:'cm:folder'"],
                ["query" => "cm:creator:mjackson"]
            ],
            "facetQueries" => [
                ["query" => "created:2016",
                    "label" => "CreatedThisYear"]
            ],
            "facetFields" => [
                "facets" => [
                    ["field" => 'creator',
                        "mincount" => 1],
                    ["field" => "modifier",
                        "mincount" => 1]
                ]
            ]
        ];

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($searchRequest));
    }

    public function testFullRequestWithArray() {
        $expected = [
            'query' => [
                'query' => "select * from cmis:folder",
                'language' => 'cmis'
            ],
            'paging' => [
                'maxItems' => 50,
                'skipCount' => 28
            ],
            'limits' => [
                'permissionEvaluationTime' => 20000,
                'permissionEvaluationCount' => 2000
            ],
            "include" => [
                "aspectNames", "properties", "isLink"
            ],
            "fields" => [
                "id", "name", "search"
            ],
            "sort" => [
                [
                    "type" => "FIELD",
                    "field" => "cm:description",
                    "ascending" => true
                ]
            ],
            "templates" => [
                ["name" => "_PERSON",
                 "template" => "|%firstName OR |%lastName OR |%userName"],
                ["name" => "mytemplate",
                 "template" => "%cm:content"]
            ],
            "spellcheck" => [
                "query" => "alfrezco"
            ],
            "defaults" => [
                "textAttributes" => [
                    "cm:content", "cm:name"
                ],
                "defaultFTSOperator" => "AND",
                "defaultFTSFieldOperator" => "OR",
                "namespace" => "cm",
                "defaultFieldName" => "PATH"
            ],
            "filterQueries" => [
                ["query" => "TYPE:'cm:folder'"],
                ["query" => "cm:creator:mjackson"]
            ],
            "facetQueries" => [
                ["query" => "created:2016",
                 "label" => "CreatedThisYear"]
            ],
            "facetFields" => [
                "facets" => [
                    ["field" => 'creator',
                     "mincount" => 1],
                    ["field" => "modifier",
                     "mincount" => 1]
                ]
            ]
        ];

        $searchRequest = SearchRequest::constructFromArray($expected);

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($searchRequest));
    }
}