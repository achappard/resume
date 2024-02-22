<?php

namespace App\Http\Controllers;

use App\Interfaces\ResumeCompetencesInterface;
use App\Interfaces\ResumeExperienceInterface;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(
        private readonly ResumeExperienceInterface $experienceRepository,
        private readonly ResumeCompetencesInterface $competenceRepository,
    ){}

    /**
     * Default method for the SPA
     * @return View
     */
    public function __invoke() : View{
        $experiences = $this->experienceRepository->getAll();
        $competences_front = $this->competenceRepository->getFrontEndCompetences();
        $competences_back = $this->competenceRepository->getBackEndCompetences();
        
        return view('home', compact('experiences'));
    }

}
