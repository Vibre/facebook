Facebook SDK ZF2 Module
=======================

Introduction
------------
This module provides a simple wrapper for the Facebook SDK for PHP. It registers the Facebook service builder as a service in the
ZF2 service manager, making it easily accessible anywhere in your application.

Installation
------------
Install the module using Composer into your application's vendor directory. Add the following line to your
`composer.json`. This will also install the Facebook SDK for PHP.

```json
{
    "require": {
        "facebook/facebook-sdk-php-zf2": "dev-master"
    }
}
```

## Configuration

Enable the module in your `application.config.php` file.

```php
return array(
    'modules' => array(
        'Facebook'
    )
);
```

Copy and paste the `facebook.local.php.dist` file to your `config/autoload` folder and customize it with your credentials and
other configuration settings. Make sure to remove `.dist` from your file. Your `facebook.local.php` might look something like
the following:

```php
<?php

return array(
    'facebook' => array(
        'appId'    => '<YOUR_APP_ID>',
        'secret' => '<YOUR_APP_SECRET>',
        'fileUpload' => false,
        'allowSignedRequest' => false
    )
);
```
