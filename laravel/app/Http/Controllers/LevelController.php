<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['only' => [
            'showLevels',
            'showLevelForm'
        ]]);
    }
    public function showLevels(){
        $levels = Level::all();

        return view('myWebSite.pages.levels', compact('levels'));
    }
    public function showLevelForm(){
        return view('myWebSite.pages.level_form');
    }
    public function addNewLevel(Request $request){
        $validateDate = $request->validate([
            'pavadinimas' => 'required',
            'aprasymas' => 'required'
        ]);
//
        $level = Level::create([
            'name'=> request('pavadinimas'),
            'about'=> request('aprasymas')
        ]);
        return redirect('/levels');
    }
}
