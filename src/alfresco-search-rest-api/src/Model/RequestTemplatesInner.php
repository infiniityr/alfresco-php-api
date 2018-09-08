<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 06/09/2018
 * Time: 15:54
 */

namespace AlfPHPApi\AlfrescoSearchRestApi\Model;


class RequestTemplatesInner extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $template;

    protected static $constructProperties = [
        'name' => 'String',
        'template' => 'String'
    ];

    /**
     * RequestTemplatesInner constructor.
     *
     * @param string $name
     * @param string $template
     */
    public function __construct(string $name = null, string $template = null)
    {
        $this->name = $name;
        $this->template = $template;}
}