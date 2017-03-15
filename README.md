![overview-wide](https://cloud.githubusercontent.com/assets/420815/23929498/c9fccaca-097a-11e7-82c3-07df37ddc32a.jpg)


# Patchr - Laravel
###### MySQL version control [Patchr on github](https://github.com/0plus1/patchr).

## Install

####Composer
```
composer require 0plus1/patchr-laravel
```

####Add as a Service Provider

In *./config/app.php*

Add:

```php
Zeroplusone\Patchr\ServiceProvider::class,
```

To the 'providers' array.

####Publish config

```
php artisan vendor:publish --provider="Zeroplusone\Patchr\ServiceProvider" --tag="config"
```

This will publish a *./config/patchr.php* file.

####Configure

Change configuration to suit your app needs ([Documentation](https://github.com/0plus1/patchr)).
 