<?php

namespace App\Providers;

use App\Filament\Resources\DokumenPendukungResource;
use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::registerResources([
            DokumenPendukungResource::class,
        ]);
    }
}