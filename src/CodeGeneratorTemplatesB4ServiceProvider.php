<?php

namespace Ybansan\Crestapps-bootstrap4-templates;

use Ybansan\CodeGenerator\Support\Helpers;
use File;
use Illuminate\Support\ServiceProvider;

class CodeGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $dir = __DIR__ . '/../';

        if (!File::exists(config_path('codegenerator_custom.php'))) {
            $this->publishes([
                $dir . 'config/codegenerator_custom.php' => config_path('codegenerator_custom.php'),
            ]);
        } else {
			$this->mergeConfigFrom(
				$dir . 'config/codegenerator_custom.php', 'codegenerator_custom'
			);			
		}
		
        $this->publishes([
            $dir . 'templates/collective-bootstrap4' => $this->codeGeneratorBase('templates/collective-bootstrap4'),
        ], 'collective-bootstrap4');

        $this->publishes([
            $dir . 'templates/bootstrap4' => $this->codeGeneratorBase('templates/bootstrap4'),
        ], 'bootstrap4');

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
