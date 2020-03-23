<?php

namespace App\Http\Controllers;

use App\Level;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => [
            'searchAction'
        ]]);
    }
    public function index()
    {
        return view('myWebSite.pages.home');
    }
    public function about()
    {
        return view('myWebSite.pages.about');
    }
    public function searchAction(Request $request){

        $lessons = Lesson::where('theme', 'LIKE', '%'.request('search').'%')
                        ->orWhere('description', 'LIKE', '%'.request('search').'%')
                        ->get();
        return view ('myWebSite.pages.search', compact('lessons'));
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
