@extends('layouts.app')
@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{{ url('/home/notes/create') }}" class="btn btn-primary">Add notes</a>

                        <br>
                        <br>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th class="nr">#</th>
                                    <th>Title</th>
                                    <th>Contects</th>
                                    <th>Action</th>
                                </tr>

                                @if(! count($notes))
                                    <tr>
                                        <td colspan="4">No Notes</td>
                                    </tr>
                                @else
                                    @foreach($notes as $index => $note)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $note->title }}</td>
                                            <td>{{ $note->contents }}</td>
                                            <td>
                                                <a class="btn btn-warning" href="{{ url('/home/notes/'.$note->id.'/edit') }}">Edit</a>
                                                <a class="btn btn-danger" href="{{ url('/home/notes/'.$note->id.'/delete') }}">Delete</a>
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