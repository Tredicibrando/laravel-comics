@extends('partials.layout')

@section('mainContent')
    <main class="main">
        <div class="container">
            <div class="card-wrapper">
                @foreach ($comics as $comic)
                <div class="card">
                    <figure class="thumb_wrapper">
                        <img src="{{$comic['thumb']}}" alt="">
                    </figure>
        
                    <h4 class="text">{{$comic['title']}}</h4>
                </div>
                @endforeach
                
            </div>
        </div>
    </main>
@endsection