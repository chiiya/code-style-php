<?php

namespace Chiiya\CodeStyle;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CodeStyleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('code-style-php');
    }

    public function bootingPackage(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $this->package->basePath('/../stubs/ecs.php.stub') => base_path('ecs.php'),
                $this->package->basePath('/../stubs/grumphp.yml.stub') => base_path('grumphp.yml'),
                $this->package->basePath('/../stubs/phpstan.neon.stub') => base_path('phpstan.neon'),
            ], "{$this->package->shortName()}-config");
        }
    }
}
