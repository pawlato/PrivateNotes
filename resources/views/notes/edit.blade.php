@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Notebook</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('/home/notes/'. $note->id) }}">
                            {{ csrf_field() }}

                            {{ method_field('put') }}

                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="title" class="form-control" value="{{ $note->title }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Text</label>
                                <textarea name="contents" rows="4" cols="50">
                                    
                                </textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Todo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection