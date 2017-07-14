@extends('layouts.app')

@section('content')
<div id="featured-movie-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#featured-movie-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#featured-movie-carousel" data-slide-to="1"></li>
        <li data-target="#featured-movie-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="media/movie_art/1_banner.jpg" alt="Los Angeles">
        </div>

        <div class="item">
            <img src="media/movie_art/2_banner.jpg" alt="Chicago">
        </div>

        <div class="item">
            <img src="media/movie_art/3_banner.jpg" alt="New York">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#featured-movie-carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#featured-movie-carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    <h1>blah</h1>
@endsection
