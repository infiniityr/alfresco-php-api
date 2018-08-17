<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 14/08/2018
 * Time: 16:12
 */

namespace AlfPHPApi;


class BpmClient extends AlfrescoApiClient
{

    /**
     * BpmClient constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = []) {
        parent::__construct();
        $this->config = $config;
        $this->changeHost();
    }

    public function changeHost() {
        $this->host = $this->config['hostBpm'];
        $this->basePath = $this->config['hostBpm'] . '/' . $this->config['contextRootBpm'];
    }

    public function setAuthentications(array $authentications) {
        $this->authentications = $authentications;
    }
}