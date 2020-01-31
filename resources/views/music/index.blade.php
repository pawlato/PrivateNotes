@extends('layouts.app')
@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{{ url('/home/music/create') }}" class="btn btn-primary">Add music album</a>

                        <br>
                        <br>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th class="nr">#</th>
                                    <th class="author">Author</th>
                                    <th class="title">Album title</th>
                                    <th class="year">Year</th>
                                    <th class="action">Action</th>
                                </tr>

                                @if(! count($music))
                                    <tr>
                                        <td colspan="5">No Albums</td>
                                    </tr>
                                @else
                                    @foreach($music as $index => $musik)
                                        <tr>
                                            <td class="nr">{{ $index + 1 }}</td>
                                            <td class="author">{{ $musik->author }}</td>
                                            <td class="title">{{ $musik->albumTitle }}</td>
                                            <td class="year">{{ $musik->year }}</td>
                                            <td class="action">
                                                <a class="btn btn-warning" href="{{ url('/home/music/'.$musik->id.'/edit') }}">Edit</a>
                                                <a class="btn btn-danger" href="{{ url('/home/music/'.$musik->id.'/delete') }}">Delete</a>
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