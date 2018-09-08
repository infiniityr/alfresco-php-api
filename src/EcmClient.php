<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 11:04
 */

namespace AlfPHPApi;


class EcmClient extends AlfrescoApiClient
{
    /**
     * @var string
     */
    public $servicePath;

    /**
     * EcmClient constructor.
     *
     * @param array  $config
     * @param string $servicePath
     */
    public function __construct(array $config = [], string $servicePath = '') {
        parent::__construct();
        $this->config = $config;
        $this->servicePath = $servicePath;
        $this->changeHost();
        self::$instance = $this;
    }

    public function changeHost() {
        $this->host = $this->config['hostEcm'];
        $this->basePath = $this->config['hostEcm'] . '/' . $this->config['contextRoot'] . $this->servicePath;
    }

    public function setAuthentications(array $authentications) {
        $this->authentications = $authentications;
    }
}