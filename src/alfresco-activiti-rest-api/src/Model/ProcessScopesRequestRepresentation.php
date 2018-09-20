<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 19/09/2018
 * Time: 12:47
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class ProcessScopesRequestRepresentation extends Model
{
    /**
     * @var ProcessScopeIdentifierRepresentation[]
     */
    public $identifiers;

    /**
     * @var string
     */
    public $overriddenModel;

    protected static $constructProperties = [
        'identifiers' => [ProcessScopeIdentifierRepresentation::class],
        'overriddenModel' => 'String'
    ];
}