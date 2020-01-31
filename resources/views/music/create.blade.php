@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Music</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('home/music/') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label">Author</label>
                                <input type="text" name="author" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Album title</label>
                                <input type="text" name="albumTitle" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Year</label>
                                <input type="number" name="year" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Album</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection