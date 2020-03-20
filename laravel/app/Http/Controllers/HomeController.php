<?php

namespace App\Http\Controllers;

use App\Level;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('myWebSite.pages.home');
    }
    public function about()
    {
        return view('myWebSite.pages.about');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
