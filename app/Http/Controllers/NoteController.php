<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        $data = [
            'notes' => $notes
        ];
        
        return view ('notes.index', $data);
    }
    public function create()
    {
        return view('notes.create');
    }
    public function store(Request $request)
    {
        Note::create($request->all());
        return redirect('/home/notes/');
    }
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    public function update(Request $request, Note $note)
    {
        $note->update($request->all());
        return redirect('/home/notes/');
    }
    public function delete(Note $note)
    {
        $note->delete();
        return redirect('/home/notes/');
    }
}
