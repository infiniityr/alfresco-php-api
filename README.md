ALFRESCO-PHP-API
====

**NON OFFICIAL PACKAGE**

This package is based on the official [alfresco-js-api](https://github.com/Alfresco/alfresco-js-api) package.

Classes dealing with the Alfresco 5.2+ API for PHP.
Most of the functionalities of the original package are present.

In order to have all the auto-suggestion, try to work with an IDE which understand the properties [`property-read`](http://docs.phpdoc.org/references/phpdoc/tags/property-read.html) and [`method`](http://docs.phpdoc.org/references/phpdoc/tags/method.html) of the PHPDoc.
I advise you to use PHPStorm or Intellij Idea which natively understand those properties.

Installation
---
```bash
composer require infiniityr/alfresco-php-api:dev-master
```

Usage
---
Initialize the class `AlfrescoApi` with the configuration array.
```php
$config = [
    'hostEcm' => 'http://localhost:8080',
    //'context' => 'alfresco',
    //'disableCsrf' => true
];
$alfrescoApi = new AlfrescoApi($config);
```
Then you can login to Alfresco.
```php
$alfrescoApi->login('login', 'password')->wait();
```
After that, just call the APIs as presented in the documentation.
```php
//Get all sites
$this->alfrescoApi->core->getSites()
    ->then(function(SitePaging $sites) {
        foreach ($sites->list->entries as $entry) {
            print_r(json_encode($entry) . "\n");
        }
    })->wait();

//Create a site
$siteBody = new SiteBody('Site Test PHP');
$siteBody->id = 'new_site_id';
$this->alfrescoApi->core->createSite($siteBody)
    ->then(function($data) {
        print_r("Site CREATED\n");
    })->wait();
```

Todo
---
A lot of stuff is still in progress.
- [ ] Unit tests of all models
- [ ] Unit tests of all apis
- [ ] Include all Activiti APIs
- [ ] Include Oauth2 Authentication

