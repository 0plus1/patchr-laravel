# Patchr - Laravel/Lumen
###### MySQL version control [Patchr on github](https://github.com/0plus1/patchr).

## Install

**Composer**

```
composer require 0plus1/patchr-laravel
```

**Create folder**
Create a new folder named *patchr* in your storage folder.


**Laravel**

In *./config/app.php*

Add:

```php
Zeroplusone\Patchr\Laravel\LaravelServiceProvider::class,
```

To the 'providers' array.

Then run:

```
php artisan vendor:publish --provider="Zeroplusone\Patchr\Laravel\LaravelServiceProvider" --tag="config"
```

To publish the configuration file.


**Lumen**

First copy the configuration file:
```./vendor/0plus1/patchr-laravel/config/patchr.php``` to ```./config/patchr.php```


In *./bootstrap/app.php* add:

```php
$app->register( Zeroplusone\Patchr\Laravel\LumenServiceProvider::class);
```

To the 'Register Service Providers' section.

```php
$app->configure('patchr');
```

To the 'Create The Application' section.
 

####Publish config

**Laravel**

**Lumen**
```
php artisan vendor:publish --provider="Zeroplusone\Patchr\Laravel\LumenServiceProvider" --tag="config"
```

This will publish a *./config/patchr.php* file.


####Configure

Change configuration to suit your app needs ([Documentation](https://github.com/0plus1/patchr)).
 
