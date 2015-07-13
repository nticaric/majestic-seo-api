[![Total Downloads](https://img.shields.io/packagist/dt/nticaric/majestic-seo-api.svg?style=flat-square)](https://packagist.org/packages/nticaric/majestic-seo-api)

majestic-seo-api
================

PHP library for making requests to the Majestic SEO API

##Instalation

The easiest way to install Majestic SEO API is via [composer](http://getcomposer.org/). Create the following `composer.json` file and run the `php composer.phar install` command to install it.

```json
{
    "require": {
        "nticaric/majestic-seo-api": "1.0.*"
    }
}
```

##Examples

### GetBackLinkData

This function returns information of the backlinks at domain, subdomain or URL level.

Usage:
```php

    use Nticaric\Majestic\MajesticAPIService;

    //if the second parameter is set to true, the sanbox mode is used
    $service = MajesticAPIService("your_api_key", true);
    $params = array(
        'MaxSameSourceURLs' => 1
    );

    $response = $service->getBackLinkData('example.com', $params);

    print_r( (string) $response->getBody());

```

Another way to do the same is:

```php

    use Nticaric\Majestic\MajesticAPIService;

    //if the second parameter is set to true, the sanbox mode is used
    $service = MajesticAPIService("your_api_key", true);
    $params = array(
        'item' => 'example.com',
        'MaxSameSourceURLs' => 1
    );

    $response = $service->executeCommand('GetBackLinkData', $params);

    print_r( (string) $response->getBody());

```

The `executeCommand` method lets you execute any method available with according 
parameters. To see what commands are available take a look at the 
[documentation](http://developer-support.majestic.com/api/commands/)


