<?php

namespace App\Repositories;

use App\Interfaces\ResumeCompetencesInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class JsonFileResumeCompetencesRepository implements ResumeCompetencesInterface
{
    private const string FILE_RESUME_PATH = 'resume/experiences.json';


    public function getFrontEndCompetences(): Collection
    {
        return collect();
    }

    public function getBackEndCompetences(): Collection
    {
        return collect();
    }
}
