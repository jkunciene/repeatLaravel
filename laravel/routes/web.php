<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
//HOMECONTROLLER
Route::get('/', 'HomeController@index');
Route::get('/about/', 'HomeController@about');
Route::get('/search', 'HomeController@searchAction');
Route::get('/logout', 'HomeController@logout');

//LESSONCONTROLLER
//GET
Route::get('/lessons', 'LessonController@showLessons');
Route::get('/lesson_form', 'LessonController@showLessonForm');
//POST
Route::post('/lesson_store', 'LessonController@addNewLesson');

//LEVELCONTROLLER
//GET
Route::get('/levels', 'LevelController@showLevels');
Route::get('/lesson_form', 'LevelController@showLevelForm');
//POST
Route::post('/level_store', 'LevelController@addNewLevel');