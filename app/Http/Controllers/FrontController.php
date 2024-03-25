<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\School;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function profile()
    {
        return view('pages.profile');
    }

    public function background()
    {
        $schools = School::all();
        $skills = Skill::all();
        return view('pages.background', [
            'schools'   => $schools,
            'skills'    => $skills,
        ]);
    }
}
