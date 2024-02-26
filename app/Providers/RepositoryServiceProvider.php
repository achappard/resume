<?php

namespace App\Providers;

use App\Interfaces\ResumeCompetencesInterface;
use App\Interfaces\ResumeExperienceInterface;
use App\Repositories\JsonFileResumeCompetencesRepository;
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

        $this->app->bind(
            ResumeCompetencesInterface::class,
            JsonFileResumeCompetencesRepository::class,
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
