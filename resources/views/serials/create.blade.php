@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Serials</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('home/serials/') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Director</label>
                                <input type="text" name="director" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Year</label>
                                <input type="number" name="year" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Serial</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection