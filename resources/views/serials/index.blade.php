@extends('layouts.app')
@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{{ url('/home/serials/create') }}" class="btn btn-primary">Add serial</a>

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

                                @if(! count($serials))
                                    <tr>
                                        <td colspan="5">No Serials</td>
                                    </tr>
                                @else
                                    @foreach($serials as $index => $serial)
                                        <tr>
                                            <td class="nr">{{ $index + 1 }}</td>
                                            <td class="title">{{ $serial->title }}</td>
                                            <td class="author">{{ $serial->Director }}</td>
                                            <td class="year">{{ $serial->year }}</td>
                                            <td class="action">
                                                <a class="btn btn-warning" href="{{ url('/home/serials/'.$serial->id.'/edit') }}">Edit</a>
                                                <a class="btn btn-danger" href="{{ url('/home/serials/'.$serial->id.'/delete') }}">Delete</a>
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