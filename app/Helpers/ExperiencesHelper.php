<?php

use Carbon\Carbon;

if (! function_exists('generate_dates_and_durations')) {
    /**
     * Génération des dates et durées à afficher pour les expériences du CV
     * @param array $experience
     * @return array
     */
    function generate_dates_and_durations(array $experience): array
    {
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
        }
        return $experience;
    }
}
