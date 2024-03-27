<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Work;
use App\Models\Skill;
use App\Models\School;
use App\Models\Seminar;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function profile()
    {
        return view('pages.profile');
    }

    public function background()
    {
        return view('pages.background', [
            'experiences'   => Experience::whereVisible(true)->orderBy('sort')->get(),
            'schools'       => School::whereVisible(true)->orderBy('sort')->get(),
            'skills'        => Skill::whereVisible(true)->orderBy('sort')->get(),
            'works'         => Work::whereVisible(true)->orderBy('sort')->get(),
            'seminars'      => Seminar::whereVisible(true)->orderBy('sort')->get(),
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
