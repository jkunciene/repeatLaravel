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
Route::get('/errors', 'HomeController@showError');

//LESSONCONTROLLER
//GET
Route::get('/lessons', 'LessonController@showLessons');
Route::get('/lesson_form', 'LessonController@showLessonForm');
Route::get('/lessons_update/{lesson}', 'LessonController@manageLessonForm');
Route::get('/lessons_delete/{lesson}', 'LessonController@lessonDelete');
Route::get('/lessonsByLevel/{level}', 'LessonController@showLessonsByLevel');
//POST
Route::post('/lesson_store', 'LessonController@addNewLesson');

Route::post('/lessonDataUpdate/{lesson}', 'LessonController@updateLesson');

//LEVELCONTROLLER
//GET
Route::get('/levels', 'LevelController@showLevels');
Route::get('/level_form', 'LevelController@showLevelForm');
Route::get('/level_delete/{level}', 'LevelController@levelDelete');
//POST
Route::post('/level_store', 'LevelController@addNewLevel');