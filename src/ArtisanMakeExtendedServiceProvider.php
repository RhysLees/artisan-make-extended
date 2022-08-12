<?php

namespace RhysLees\ArtisanMakeExtended;

use RhysLees\ArtisanMakeExtended\Commands\ArtisanMakeExtendedCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ArtisanMakeExtendedServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('artisan-make-extended')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_artisan-make-extended_table')
            ->hasCommand(ArtisanMakeExtendedCommand::class);
    }
}
