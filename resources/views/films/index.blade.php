@extends('layouts.app')
@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{{ url('/home/films/create') }}" class="btn btn-primary">Add film</a>

                        <br>
                        <br>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th class="nr">#</th>
                                    <th class="title">Title</th>
                                    <th class="author">Director</th>
                                    <th class="year">Year</th>
                                    <th class="action">Action</th>
                                </tr>

                                @if(! count($films))
                                    <tr>
                                        <td colspan="5">No Films</td>
                                    </tr>
                                @else
                                    @foreach($films as $index => $film)
                                        <tr>
                                            <td class="nr">{{ $index + 1 }}</td>
                                            <td class="title">{{ $film->title }}</td>
                                            <td>{{ $film->director }}</td>
                                            <td>{{ $film->year }}</td>
                                            <td>
                                                <a class="btn btn-warning" href="{{ url('/home/films/'.$film->id.'/edit') }}">Edit</a>
                                                <a class="btn btn-danger" href="{{ url('/home/films/'.$film->id.'/delete') }}">Delete</a>
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