# Patchr - Laravel/Lumen
###### MySQL version control [Patchr on github](https://github.com/0plus1/patchr).

## Install

###Composer
```
composer require 0plus1/patchr-laravel
```
Create a new folder named *patchr* in your storage folder.


###Add as a Service Provider (Laravel)

In *./config/app.php*

Add:

```php
Zeroplusone\Patchr\Laravel\LaravelServiceProvider::class,
```

To the 'providers' array.


###Add as a Service Provider (Lumen)

In *./bootstrap/app.php*

Add:

```php
$app->register( Zeroplusone\Patchr\Laravel\LumenServiceProvider::class);
```

To the 'Register Service Providers' section.


####Publish config

**Laravel**
```
php artisan vendor:publish --provider="Zeroplusone\Patchr\Laravel\LaravelServiceProvider" --tag="config"
```

**Lumen**
```
php artisan vendor:publish --provider="Zeroplusone\Patchr\Laravel\LumenServiceProvider" --tag="config"
```

This will publish a *./config/patchr.php* file.


####Configure

Change configuration to suit your app needs ([Documentation](https://github.com/0plus1/patchr)).
 
