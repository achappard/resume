<?php

namespace App\Repositories;

use App\Interfaces\ResumeCompetencesInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class JsonFileResumeCompetencesRepository implements ResumeCompetencesInterface
{
    private const string FILE_RESUME_PATH = 'resume/skills.json';


    public function getAll(): Collection
    {
        if(!Storage::exists(self::FILE_RESUME_PATH)){
            return collect();
        }
        $data = Storage::json(self::FILE_RESUME_PATH);
        if(is_null($data)){
            return collect();
        }

        $return = [];
        foreach ($data as $group){
            $return[] = [
                'title' => array_key_exists('title', $group) ? $group['title'] : false,
                'skills' => array_key_exists('skills', $group) ? collect($group['skills']) : collect()
            ];
        }

        return collect($return);
    }
}
