<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 18/09/2018
 * Time: 19:58
 */

namespace AlfPHPApi\AlfrescoActivitiRestApi\Model;


class FormSaveRepresentation extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $formImageBase64;

    /**
     * @var FormRepresentation
     */
    public $formRepresentation;

    /**
     * @var bool
     */
    public $newVersion;

    /**
     * @var ProcessScopeIdentifierRepresentation[]
     */
    public $processScopeIdentifiers;

    /**
     * @var bool
     */
    public $reusable;

    protected static $constructProperties = [
        'comment' => 'String',
        'formImageBase64' => 'String',
        'formRepresentation' => FormRepresentation::class,
        'newVersion' => 'Boolean',
        'processScopeIdentifiers' => [ProcessScopeIdentifierRepresentation::class],
        'reusable' => 'Boolean'
    ];
}