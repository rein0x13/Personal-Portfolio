<?php

namespace App\Http\Controllers;

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
            'schools'   => School::all(),
            'skills'    => Skill::all(),
            'works'     => Work::all(),
            'seminars'  => Seminar::all(),
        ]);
    }
}
