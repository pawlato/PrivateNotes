<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $data = [
            'books' => $books
        ];
        
        return view ('books.index', $data);
    }
    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect('/home/books/');
    }
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect('/home/books/');
    }
    public function delete(Book $book)
    {
        $book->delete();
        return redirect('/home/books/');
    }
}
