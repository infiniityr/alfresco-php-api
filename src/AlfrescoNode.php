<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 12:26
 */

namespace AlfPHPApi;


use AlfPHPApi\AlfrescoCoreRestApi\Api\NodesApi;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeEntry;

class AlfrescoNode extends NodesApi
{
    public function getNodeInfo($nodeId, $opts = []) {
        return $this->getNode($nodeId, $opts)
            ->then(function(NodeEntry $data) {
                return $data->entry;
            }, function($error) {
                throw $error;
            });
    }

    public function deleteNodePermanent($nodeId) {
        return $this->deleteNode($nodeId, ['permanent' => true]);
    }

    public function createFolder($name, $relativePath, $nodeId = '-root-', $opts = []) {
        $nodeBody = new NodeBody();
        $nodeBody->name = $name;
        $nodeBody->nodeType = 'cm:folder';
        $nodeBody->relativePath = $relativePath;

        return $this->addNode($nodeId, $nodeBody, $opts);
    }

    public function createFolderAutoRename($name, $relativePath, $nodeId = '-root-', $opts = []) {
        $opts = array_merge($opts, ['autoRename' => true]);
        return $this->createFolder($name, $relativePath, $nodeId, $opts);
    }
}