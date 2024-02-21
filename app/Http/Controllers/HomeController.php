<?php

namespace App\Http\Controllers;

use App\Interfaces\ResumeExperienceInterface;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(
        private readonly ResumeExperienceInterface $resumeExperienceRepository,
    ){}

    /**
     * Default method for the SPA
     * @return View
     */
    public function __invoke() : View{
        $experiences = $this->resumeExperienceRepository->getAll();
        return view('home', compact('experiences'));
    }

}
