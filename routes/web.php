<?php

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

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'turma', 'as' => 'turma.', 'middleware' => 'auth'], function () {

    Route::get('/',                   ['uses' => 'TurmaController@index'])->name('index');
    Route::get('/create',             ['uses' => 'TurmaController@create'])->name('create');
    Route::post('/store',             ['uses' => 'TurmaController@store'])->name('store');
    Route::get('/edit/{id}',          ['uses' => 'TurmaController@edit'])->name('edit');
    Route::post('/update/{id}',       ['uses' => 'TurmaController@update'])->name('update');
    Route::get('/destroy/{id}',       ['uses' => 'TurmaController@destroy'])->name('destroy');
    Route::get('/show/{id}',          ['uses' => 'TurmaController@show'])->name('show');
    Route::post('/matricular',        ['uses' => 'TurmaController@matricular'])->name('matricular');

});

Route::group(['prefix' => 'aluno', 'as' => 'aluno.', 'middleware' => 'auth'], function () {

    Route::get('/',                   ['uses' => 'AlunoController@index'])->name('index');
    Route::get('/create',             ['uses' => 'AlunoController@create'])->name('create');
    Route::post('/store',             ['uses' => 'AlunoController@store'])->name('store');
    Route::get('/edit/{id}',          ['uses' => 'AlunoController@edit'])->name('edit');
    Route::post('/update/{id}',       ['uses' => 'AlunoController@update'])->name('update');
    Route::get('/destroy/{id}',       ['uses' => 'AlunoController@destroy'])->name('destroy');
    Route::get('/show/{id}',          ['uses' => 'AlunoController@show'])->name('show');

});

Route::group(['prefix' => 'professor', 'as' => 'professor.', 'middleware' => 'auth'], function () {

    Route::get('/',                   ['uses' => 'ProfessorController@index'])->name('index');
    Route::get('/create',             ['uses' => 'ProfessorController@create'])->name('create');
    Route::post('/store',             ['uses' => 'ProfessorController@store'])->name('store');
    Route::get('/edit/{id}',          ['uses' => 'ProfessorController@edit'])->name('edit');
    Route::post('/update/{id}',       ['uses' => 'ProfessorController@update'])->name('update');
    Route::get('/destroy/{id}',       ['uses' => 'ProfessorController@destroy'])->name('destroy');
    Route::get('/show/{id}',          ['uses' => 'ProfessorController@show'])->name('show');

});
