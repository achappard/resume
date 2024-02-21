<?php

namespace App\Providers;

use App\Interfaces\ResumeExperienceInterface;
use App\Repositories\JsonFileResumeExperienceRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            ResumeExperienceInterface::class,
            JsonFileResumeExperienceRepository::class,
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
