@extends('partials.layout')

@section('mainContent')

    <div class="container-show">
            <figure>
                <img src="{{$comics['thumb']}}" alt="">
            </figure>

           <h4> 
               {{$comics['title']}}
            </h4>

           <div class="price">
            {{$comics['price']}}
           </div>

           <p>
            {{$comics['description']}}
           </p>
    </div>

@endsection