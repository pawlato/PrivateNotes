@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Notebook</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('home/notes/') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Text</label>
                                <textarea name="contents" rows="4" cols="50">
                                    
                                </textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Notes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection