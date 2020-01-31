<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'PrivateNotes';
        return view('welcome')->with('title', $title);
    }
}
