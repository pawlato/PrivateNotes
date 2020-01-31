@extends('layouts.app')
@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{{ url('/home/books/create') }}" class="btn btn-primary">Add book</a>

                        <br>
                        <br>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th class="nr">#</th>
                                    <th class="title">Title</th>
                                    <th class="author">Author</th>
                                    <th class="year">Year</th>
                                    <th class="action">Action</th>
                                </tr>

                                @if(! count($books))
                                    <tr>
                                        <td colspan="3">No Books</td>
                                    </tr>
                                @else
                                    @foreach($books as $index => $book)
                                
                                        <tr>
                                            <td class="nr">{{ $index + 1 }}</td>
                                            <td class="title">{{ $book->title }}</td>
                                            <td class="author">{{ $book->author }}</td>
                                            <td class="year">{{ $book->year }}</td>
                                            <td  class="action">
                                                <a class="btn btn-warning" href="{{ url('/home/books/'.$book->id.'/edit') }}">Edit</a>
                                                <a class="btn btn-danger" href="{{ url('/home/books/'.$book->id.'/delete') }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection