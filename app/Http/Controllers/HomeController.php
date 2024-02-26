<?php

namespace App\Http\Controllers;

use App\Interfaces\ResumeCompetencesInterface;
use App\Interfaces\ResumeExperienceInterface;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(
        private readonly ResumeExperienceInterface  $experienceRepository,
        private readonly ResumeCompetencesInterface $competenceRepository,
    )
    {
    }

    /**
     * Default method for the SPA
     * @return View
     */
    public function __invoke(): View
    {
        $data = [
            'experiences' => $this->experienceRepository->getAll(),
            'competences' => $this->competenceRepository->getAll(),
        ];
        return view('home', $data);
    }

}
