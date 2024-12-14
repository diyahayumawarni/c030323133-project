<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\BeasiswaRepositoryInterface;
use App\Repositories\BeasiswaRepository;
use App\Repositories\Contracts\PendaftaranRepositoryInterface;
use App\Repositories\PendaftaranRepository;
use App\Repositories\Contracts\DokumenPendukungRepositoryInterface;
use App\Repositories\DokumenPendukungRepository;
use App\Repositories\Contracts\NotifikasiRepositoryInterface;
use App\Repositories\NotifikasiRepository;
use App\Repositories\Contracts\ReviewPendaftaranRepositoryInterface;
use App\Repositories\ReviewPendaftaranRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind interface ke implementasi
        $this->app->bind(BeasiswaRepositoryInterface::class, BeasiswaRepository::class);
        $this->app->bind(PendaftaranRepositoryInterface::class, PendaftaranRepository::class);
        $this->app->bind(DokumenPendukungRepositoryInterface::class, DokumenPendukungRepository::class);
        $this->app->bind(NotifikasiRepositoryInterface::class, NotifikasiRepository::class);
        $this->app->bind(ReviewPendaftaranRepositoryInterface::class, ReviewPendaftaranRepository::class);
    }

    public function boot()
    {
        //
    }
}