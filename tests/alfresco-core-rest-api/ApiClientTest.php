<?php

namespace AlfPHPApi\Tests\AlfrescoCoreRestApi;

use \PHPUnit\Framework\TestCase;
use AlfPHPApi\AlfrescoCoreRestApi\ApiClient;
use \GuzzleHttp\Psr7\Request;

/**
 * Class ApiClientTest
 */
class ApiClientTest extends TestCase
{
    /**
     * @var \AlfPHPApi\AlfrescoApi
     */
    private $alfrescoApi;

    private static $SITE_ID = "test-site-php";

    protected function setUp()
    {
        $this->alfrescoApi = new \AlfPHPApi\AlfrescoApi([
            'hostEcm' => $_ENV['ALFRESCO_BASE_URL'],
            'provider' => 'ECM',
        ]);
        $this->alfrescoApi->login($_ENV['ALFRESCO_USERNAME'], $_ENV['ALFRESCO_PASSWORD'])->wait();
        parent::setUp();
    }

    /**
     * @group testApi
     */
    public function testGetSites()
    {
        $this->alfrescoApi->core->getSites()
            ->then(function(\AlfPHPApi\AlfrescoCoreRestApi\Model\SitePaging $sites) {
                foreach ($sites->list->entries as $entry) {
                    print_r(json_encode($entry) . "\n");
                }
            })->wait();
    }

    /**
     * @group testApi
     */
    public function testCreateSite()
    {
        $siteBody = new \AlfPHPApi\AlfrescoCoreRestApi\Model\SiteBody("Site Test PHP");
        self::$SITE_ID .= date("YmdHis");
        $siteBody->id = self::$SITE_ID;
        $this->alfrescoApi->core->createSite($siteBody)
        ->then(function($data) {
            print_r("Site CREATED\n");
        })->wait();
    }

    /**
     * @group testApi
     */
    public function testDeleteSite()
    {
        $this->alfrescoApi->core->deleteSite(self::$SITE_ID, ['permanent' => true])
            ->then(function($data) {
                print_r("Site DELETED\n");
            })->wait();
    }
}