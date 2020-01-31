@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Serials</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('/home/serials/'. $serial->id) }}">
                            {{ csrf_field() }}

                            {{ method_field('put') }}

                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $serial->title }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Author</label>
                                <input type="text" name="author" class="form-control" value="{{ $serial->author }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Year</label>
                                <input type="number" name="year" class="form-control" value="{{ $serial->year }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Serial</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection