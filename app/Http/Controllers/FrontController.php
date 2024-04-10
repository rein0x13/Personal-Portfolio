<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Work;
use App\Models\Skill;
use App\Models\School;
use App\Models\Seminar;
use App\Models\Experience;
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
            // 'experiences'   => Experience::whereVisible(true)->orderBy('sort')->get(),
            // 'schools'       => School::whereVisible(true)->orderBy('sort')->get(),
            // 'skills'        => Skill::whereVisible(true)->orderBy('sort')->get(),
            // 'works'         => Work::whereVisible(true)->orderBy('sort')->get(),
            // 'seminars'      => Seminar::whereVisible(true)->orderBy('sort')->get(),
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    // public function sendMessage(Request $request)
    // {
    //     $validated = $request->validate([
    //         'sender' => ['required', 'min:5', 'max:100'],
    //         'contact' => ['required', 'max:255'],
    //         'message' => ['required'],
    //     ]);

    //     dd($validated);
    // }

    public function listBlogs()
    {
        return view('pages.blogs.list');
    }

    public function readBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.blogs.view', [
            "blog" => $blog,
        ]);
    }
}
