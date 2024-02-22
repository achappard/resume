<?php

namespace App\Repositories;

use App\Interfaces\ResumeExperienceInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class JsonFileResumeExperienceRepository implements ResumeExperienceInterface
{
    private const string FILE_RESUME_PATH = 'resume/experiences.json';

    /**
     * Retourne toutes les expériences du CV depuis le fichier JSON physique FILE_RESUME_PATH
     * @return Collection
     */
    public function getAll() : Collection
    {
        if(!Storage::exists(self::FILE_RESUME_PATH)){
            return collect();
        }
        $experiences = Storage::json(self::FILE_RESUME_PATH);
        if(is_null($experiences)){
            return collect();
        }
        $return = [];
        foreach ($experiences as $experience){
            $experience = generate_dates_and_durations($experience);
            $return[] = $experience;
        }
        return collect($return);
    }
}
