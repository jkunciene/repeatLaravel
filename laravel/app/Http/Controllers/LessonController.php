<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Level;

use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showLessons(){
        $lessons = Lesson::paginate(2);

        return view ('myWebSite.pages.lessons', compact('lessons'));
    }

    public function showLessonForm(){
        $levels = Level::all();

        return view ('myWebSite.pages.lesson_form', compact('levels'));
    }

    public function addNewLesson(Request $request){
        $validateDate = $request->validate([
            'lygis' => 'required',
            'pavadinimas' => 'required',
            'aprasymas' => 'required',
            'skaidres' => 'required'
        ]);
        $lesson = Lesson::create([
            //i db stulpeli vardu name, idek title reiksme "name" is formos
            'theme' => request('pavadinimas'),
            'description' => request('aprasymas'),
            'file' => request('skaidres'),
            'level' => request('lygis')
        ]);
        return redirect('/lessons');
    }

    public function manageLessonForm(Lesson $lesson){
            return view('myWebSite.pages.lesson_update', compact('lesson'));
    }

    public function updateLesson(Lesson $lesson, Request $request){
        $validateDate = $request->validate([
            'lygis' => 'required',
            'pavadinimas' => 'required',
            'aprasymas' => 'required',
            'skaidres' => 'required'
        ]);
       Lesson::where('id', request('id'))->
        update(['theme' => request('pavadinimas'),
            'description' => request('aprasymas'),
            'file' => request('skaidres'),
            'level' => request('lygis')
        ]);
        return redirect('/lessons');

    }
    public function lessonDelete(Lesson $lesson){
            $lesson->delete();
            return redirect ('/lessons');
    }

    public function showLessonsByLevel(Request $request){

        $lessons = Lesson::with('level')->where('level', $request->level)->get();

        return view('myWebSite.pages.lessons', compact('lessons'));
    }

}
