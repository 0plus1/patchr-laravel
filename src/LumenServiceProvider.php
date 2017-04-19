<?php
namespace Zeroplusone\Patchr\Laravel;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Zeroplusone\Patchr\Laravel\Console\Commands\PatchrCLI;

/**
 * Class LumenServiceProvider
 * @package Zeroplusone\Patchr\Lumen
 */
class LumenServiceProvider extends IlluminateServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @throws \Exception
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/../config/patchr.php';
        $this->mergeConfigFrom($configPath, 'patchr');
    }

    /**
     *
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/patchr.php';
        $this->publishes([$configPath => $this->config_path('patchr.php')], 'config');
        $this->cli();
    }

    /**
     * Provides the CLI commands to Laravel
     */
    private function cli()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PatchrCLI::class,
            ]);
        }
    }

    /**
     * Lumen friendly config_path function
     *
     * @param string $path
     * @return string
     */
    private function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}
