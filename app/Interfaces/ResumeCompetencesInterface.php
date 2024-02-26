<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface ResumeCompetencesInterface
{
    public function getAll(): Collection;
}
