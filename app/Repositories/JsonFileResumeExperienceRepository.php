<?php

namespace App\Repositories;

use App\Interfaces\ResumeExperienceInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class JsonFileResumeExperienceRepository implements ResumeExperienceInterface
{
    private const FILE_RESUME_PATH = 'resume/experiences.json';

    /**
     * Retourne toutes les expériences du CV depuis le fichier JSON physique FILE_RESUME_PATH
     * @return array|string[]
     */
    public function getAll(): array
    {
        if(!Storage::exists(self::FILE_RESUME_PATH)){
            return [];
        }
        $experiences = Storage::json(self::FILE_RESUME_PATH);
        if(is_null($experiences)){
            return [];
        }
        $return = [];
        foreach ($experiences as $experience){
            $start_date_json = $experience['start-date'];
            $end_date_json = $experience['end-date'];

            if($start_date_json){
                $start_date = Carbon::parse($start_date_json)->roundMonth();
                $experience['start-date-short'] = $start_date->translatedFormat('M Y');
                if($end_date_json){
                    $end_date = Carbon::parse($end_date_json)->roundMonth();
                    $experience['end-date-short'] = $end_date->translatedFormat('M Y');
                }else{
                    $end_date = Carbon::now()->roundMonth();
                    $experience['end-date-short'] = "aujourd'hui";
                }

                $experience['duration'] = $start_date->diff($end_date)->format('%y ans et %m mois');
                $return[] = $experience;
            }


        }
        return $return;
    }
}
