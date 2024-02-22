<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface ResumeExperienceInterface
{
    public function getAll(): Collection;
}
