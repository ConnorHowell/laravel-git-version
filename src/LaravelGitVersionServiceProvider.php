<?php

namespace ConnorHowell\LaravelGitVersion;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ConnorHowell\LaravelGitVersion\Commands\LaravelGitVersionCommand;

class LaravelGitVersionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-git-version');
    }
}
