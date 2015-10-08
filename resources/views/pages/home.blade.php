@extends('layouts.master')

@section('content')

    @inject('image', 'Tmdb\Helper\ImageHelper')

        @foreach ($movies as $movie)
            <div class="col-md-2 col-xs-3">
                <a href="#" class="thumbnail">
                    {!! $image->getHtml($movie->getPosterImage(), 'w154', 170, 255) !!}
                </a>
                <span>{{$movie->getOriginalTitle()}}</span>

            </div>
        @endforeach

@endsection