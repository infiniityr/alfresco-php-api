<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 07/09/2018
 * Time: 21:29
 */

use \PHPUnit\Framework\TestCase;
use \AlfPHPApi\AlfrescoDiscoveryRestApi\Model\DiscoveryEntry;

class DiscoveryApiTest extends TestCase
{
    public function testResponse() {
        $responseString = '{
  "entry": {
    "repository": {
      "edition": "Enterprise",
      "version": {
        "major": "5",
        "minor": "2",
        "patch": "2",
        "hotfix": "0",
        "schema": 10057,
        "label": "r73ead3c7-b36",
        "display": "5.2.2.0 (r73ead3c7-b36) schema 10057"
      },
      "license": {
        "issuedAt": "2018-06-07T15:28:49.427+0000",
        "expiresAt": "2018-07-06T23:00:00.000+0000",
        "remainingDays": -62,
        "holder": "Trial User",
        "mode": "ENTERPRISE",
        "entitlements": {
          "isClusterEnabled": false,
          "isCryptodocEnabled": false
        }
      },
      "status": {
        "isReadOnly": false,
        "isAuditEnabled": true,
        "isQuickShareEnabled": true,
        "isThumbnailGenerationEnabled": true
      },
      "modules": [
        {
          "id": "alfresco-share-services",
          "title": "Alfresco Share Services AMP",
          "description": "Module to be applied to alfresco.war, containing APIs for Alfresco Share",
          "version": "5.2.2",
          "installDate": "2017-11-16T16:16:43.661+0000",
          "installState": "INSTALLED",
          "versionMin": "5.1",
          "versionMax": "999"
        },
        {
          "id": "alfresco-trashcan-cleaner",
          "title": "alfresco-trashcan-cleaner project",
          "description": "The Alfresco Trash Can Cleaner (Alfresco Module)",
          "version": "2.2",
          "installState": "UNKNOWN",
          "versionMin": "0",
          "versionMax": "999"
        }
      ]
    }
  }
}';
        $responseArray = json_decode($responseString, true);
        $responseObject = DiscoveryEntry::constructFromArray($responseArray);

        $this->assertAttributeEquals($responseArray['entry']['repository']['edition'], 'edition', $responseObject->entry->repository);

        $this->assertAttributeEquals($responseArray['entry']['repository']['version']['major'], 'major', $responseObject->entry->repository->version);
        $this->assertAttributeEquals($responseArray['entry']['repository']['version']['minor'], 'minor', $responseObject->entry->repository->version);
        $this->assertAttributeEquals($responseArray['entry']['repository']['version']['patch'], 'patch', $responseObject->entry->repository->version);
        $this->assertAttributeEquals($responseArray['entry']['repository']['version']['hotfix'], 'hotfix', $responseObject->entry->repository->version);
        $this->assertAttributeEquals($responseArray['entry']['repository']['version']['schema'], 'schema', $responseObject->entry->repository->version);
        $this->assertAttributeEquals($responseArray['entry']['repository']['version']['label'], 'label', $responseObject->entry->repository->version);
        $this->assertAttributeEquals($responseArray['entry']['repository']['version']['display'], 'display', $responseObject->entry->repository->version);

        $this->assertAttributeEquals(new DateTime($responseArray['entry']['repository']['license']['issuedAt']), 'issuedAt', $responseObject->entry->repository->license);
        $this->assertAttributeEquals(new DateTime($responseArray['entry']['repository']['license']['expiresAt']), 'expiresAt', $responseObject->entry->repository->license);
        $this->assertAttributeEquals($responseArray['entry']['repository']['license']['remainingDays'], 'remainingDays', $responseObject->entry->repository->license);
        $this->assertAttributeEquals($responseArray['entry']['repository']['license']['holder'], 'holder', $responseObject->entry->repository->license);
        $this->assertAttributeEquals($responseArray['entry']['repository']['license']['mode'], 'mode', $responseObject->entry->repository->license);

        $this->assertAttributeEquals($responseArray['entry']['repository']['license']['entitlements']['isClusterEnabled'], 'isClusterEnabled', $responseObject->entry->repository->license->entitlements);
        $this->assertAttributeEquals($responseArray['entry']['repository']['license']['entitlements']['isCryptodocEnabled'], 'isCryptodocEnabled', $responseObject->entry->repository->license->entitlements);


    }
}