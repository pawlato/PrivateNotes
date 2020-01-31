<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Music;

class MusicController extends Controller
{
    public function index()
    {
        $music = Music::all();
        $data = [
            'music' => $music 
        ];
        
        return view ('music.index', $data);
    }
    public function create()
    {
        return view('music.create');
    }
    public function store(Request $request)
    {
        Music::create($request->all());
        return redirect('/home/music/');
    }
    public function edit(Music $musik)
    {
        return view('music.edit', compact('musik'));
    }
    public function update(Request $request, Music $musik)
    {
        $musik->update($request->all());
        return redirect('/home/music/');
    }
    public function delete(Music $musik)
    {
        $musik->delete();
        return redirect('/home/music/');
    }
}
