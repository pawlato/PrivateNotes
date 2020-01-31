<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Serial;

class SerialController extends Controller
{
    public function index()
    {
        $serials = Serial::all();
        $data = [
            'serials' => $serials
        ];
        
        return view ('serials.index', $data);
    }
    public function create()
    {
        return view('serials.create');
    }
    public function store(Request $request)
    {
        Serial::create($request->all());
        return redirect('/home/serials/');
    }
    public function edit(Serial $serial)
    {
        return view('serials.edit', compact('serial'));
    }
    public function update(Request $request, Serial $serial)
    {
        $serial->update($request->all());
        return redirect('/home/serials/');
    }
    public function delete(Serial $serial)
    {
        $serial->delete();
        return redirect('/home/serials/');
    }
}
