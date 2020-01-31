<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        $data = [
            'films' => $films
        ];
        
        return view ('films.index', $data);
    }
    public function create()
    {
        return view('films.create');
    }
    public function store(Request $request)
    {
        Film::create($request->all());
        return redirect('/home/films/');
    }
    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
    }
    public function update(Request $request, Film $film)
    {
        $film->update($request->all());
        return redirect('/home/films/');
    }
    public function delete(Film $film)
    {
        $film->delete();
        return redirect('/home/films/');
    }
}
