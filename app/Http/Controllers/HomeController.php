<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $skills = $this->getSkills();
        $projects = $this->getProjects();

        return view('welcome', compact('skills', 'projects'));
    }

    protected function getSkills()
    {
        return Skill::all();
    }

    protected function getProjects()
    {
        return Project::all();
    }
}
