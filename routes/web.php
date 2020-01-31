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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home/calendar','FullCalendarController@index');
Route::post('/home/calendar/create','FullCalendarController@create');
Route::post('/home/calendar/update','FullCalendarController@update');
Route::post('/home/calendar/delete','FullCalendarController@destroy');


Route::get('/home/todos', 'TodoController@index');
Route::get('/home/todos/create', 'TodoController@create');
Route::post('/home/todos', 'TodoController@store');
Route::get('/home/todos/{todo}/edit', 'TodoController@edit');
Route::put('/home/todos/{todo}', 'TodoController@update');
Route::get('/home/todos/{todo}/delete', 'TodoController@delete');


Route::get('/home/notes', 'NoteController@index');
Route::get('/home/notes/create', 'NoteController@create');
Route::post('/home/notes', 'NoteController@store');
Route::get('/home/notes/{note}/edit', 'NoteController@edit');
Route::put('/home/notes/{note}', 'NoteController@update');
Route::get('/home/notes/{note}/delete', 'NoteController@delete');


Route::get('/home/music', 'MusicController@index');
Route::get('/home/music/create', 'MusicController@create');
Route::post('/home/music', 'MusicController@store');
Route::get('/home/music/{musik}/edit', 'MusicController@edit');
Route::put('/home/music/{musik}', 'MusicController@update');
Route::get('/home/music/{musik}/delete', 'MusicController@delete');


Route::get('/home/films', 'FilmController@index');
Route::get('/home/films/create', 'FilmController@create');
Route::post('/home/films', 'FilmController@store');
Route::get('/home/films/{film}/edit', 'FilmController@edit');
Route::put('/home/films/{film}', 'FilmController@update');
Route::get('/home/films/{film}/delete', 'FilmController@delete');


Route::get('/home/books', 'BookController@index');
Route::get('/home/books/create', 'BookController@create');
Route::post('/home/books', 'BookController@store');
Route::get('/home/books/{book}/edit', 'BookController@edit');
Route::put('/home/books/{book}', 'BookController@update');
Route::get('/home/books/{book}/delete', 'BookController@delete');


Route::get('/home/serials', 'SerialController@index');
Route::get('/home/serials/create', 'SerialController@create');
Route::post('/home/serials', 'SerialController@store');
Route::get('/home/serials/{serial}/edit', 'SerialController@edit');
Route::put('/home/serials/{serial}', 'SerialController@update');
Route::get('/home/serials/{serial}/delete', 'SerialController@delete');