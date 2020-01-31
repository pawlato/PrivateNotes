@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Books</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('/home/books/'. $book->id) }}">
                            {{ csrf_field() }}

                            {{ method_field('put') }}

                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $book->title }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Author</label>
                                <input type="text" name="author" class="form-control" value="{{ $book->author }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Year</label>
                                <input type="text" name="year" class="form-control" value="{{ $book->year }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Book</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection