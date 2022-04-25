@extends('partials.layout')

@section('mainContent')
    <main class="main">
        <div class="container">
            <div class="card-wrapper">
                @foreach ($comics as $index => $comic)
                <a class="card" href="{{ route('show', ['id' => $index]) }}">
                    <figure class="thumb_wrapper">
                        <img src="{{$comic['thumb']}}" alt="">
                    </figure>
        
                    <h4 class="text">{{$comic['title']}}</h4>
                </a>
                @endforeach
                <div class="load__wrapper">
                    <input class="load" type="button" value="Load More">
                </div>
            </div>
        </div>
        <div class="cta">
            <div class="container">
                <div class="cta__wrapper">
                    <ul class="cta__list">
                        @foreach ($items as $item)
                        <li class="cta__item">
                            <figure>
                                <img src="{{$item['image']}}" alt="">
                            </figure>
                            <h4 class="cta__text">{{$item['text']}}</h4>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection