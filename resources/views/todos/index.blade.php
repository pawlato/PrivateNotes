@extends('layouts.app')
@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{{ url('/home/todos/create') }}" class="btn btn-primary">Add todo</a>

                        <br>
                        <br>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th class="nr">#</th>
                                    <th>Name</th>
                                    <th>Is Done</th>
                                    <th>Action</th>
                                </tr>

                                @if(! count($todos))
                                    <tr>
                                        <td colspan="4">No Todo</td>
                                    </tr>
                                @else
                                    @foreach($todos as $index => $todo)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $todo->name }}</td>
                                            <td>{{ $todo->is_done ? 'Done' : 'Not Done'}}</td>
                                            <td>
                                                <a class="btn btn-warning" href="{{ url('/home/todos/'.$todo->id.'/edit') }}">Edit</a>
                                                <a class="btn btn-danger" href="{{ url('/home/todos/'.$todo->id.'/delete') }}">Delete</a>
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