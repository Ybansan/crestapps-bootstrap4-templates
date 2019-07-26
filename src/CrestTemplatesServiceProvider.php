<?php

namespace Ybansan\CrestappsBootstrap4Templates;

use File;
use Illuminate\Support\ServiceProvider;

class CrestTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $dir = __DIR__ . '/../';

        $this->publishes([
            $dir . 'templates/collective-bootstrap4' => $this->codeGeneratorBase('templates/collective-bootstrap4'),
            base_path('vendor/crestapps/laravel-code-generator/templates/default-collective')  => $this->codeGeneratorBase('templates/collective-bootstrap4'),
            $dir . 'templates/bootstrap4' => $this->codeGeneratorBase('templates/bootstrap4'),
            base_path('vendor/crestapps/laravel-code-generator/templates/default')  => $this->codeGeneratorBase('templates/bootstrap4'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Create a directory if one does not already exists
     *
     * @param string $path
     *
     * @return void
     */
    protected function createDirectory($path)
    {
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true);
        }
    }

    /**
     * Get the laravel-code-generator base path
     *
     * @param string $path
     *
     * @return string
     */
    protected function codeGeneratorBase($path = null)
    {
        return base_path('resources/laravel-code-generator/') . $path;
    }
}
