<?php

namespace NjoguAmos\KeMobile;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class KeMobileServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name(name: 'kenya-mobile')
            ->hasTranslations();
    }
}
