<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Level;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => [
            'showLessons'
        ]]);
    }
    public function showLessons(){
        $lessons = Lesson::all();

        return view ('myWebSite.pages.lessons', compact('lessons'));
    }
}
