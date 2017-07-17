@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#nowshowing" aria-controls="nowshowing" role="tab" data-toggle="tab">Now Showing</a></li>
                <li role="presentation"><a href="#comingsoon" aria-controls="comingsoon" role="tab" data-toggle="tab">Coming Soon</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="nowshowing">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Genre</th>
                            <th>Rating</th>
                            <th>Release Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($nowshowing as $movie)
                            <tr>
                                <td>{{$movie->title}}</td>
                                <td>{{$movie->genre->name}}</td>
                                <td>{{$movie->rating->name}} ({{$movie->rating->code}})</td>
                                <td>{{$movie->release_date}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="comingsoon">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Genre</th>
                            <th>Rating</th>
                            <th>Release Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($comingsoon as $movie)
                            <tr>
                                <td>{{$movie->title}}</td>
                                <td>{{$movie->genre->name}}</td>
                                <td>{{$movie->rating->name}} ({{$movie->rating->code}})</td>
                                <td>{{$movie->release_date}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
