<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project; // أضف هذا

class HomeController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $projects = Project::all(); // جلب المشاريع هنا
        return view('welcome', compact('skills', 'projects'));
    }
}
