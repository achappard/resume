<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface ResumeCompetencesInterface
{
    public function getFrontEndCompetences(): Collection;
    public function getBackEndCompetences(): Collection;
}
