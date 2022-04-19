@php
    
    $links = [
        [
            'link'=>'characters',
            'href'=>'/characters'
        ],
        [
            'link'=>'comics',
            'href'=>'/comics'
        ],
        [
            'link'=>'movies',
            'href'=>'/movies'
        ],
        [
            'link'=>'tv',
            'href'=>'/tv'
        ],
        [
            'link'=>'games',
            'href'=>'/games'
        ],
        [
            'link'=>'collectibles',
            'href'=>'/collectibles'
        ],
        [
            'link'=>'videos',
            'href'=>'/videos'
        ],
        [
            'link'=>'fans',
            'href'=>'/fans'
        ],
        [
            'link'=>'news',
            'href'=>'/news'
        ],
        [
            'link'=>'shop',
            'href'=>'/shop'
        ],
    ];

@endphp



<div class="container">
    <header class="main_header">
        <figure class="logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="">
        </figure>
        <div class="navbar">
            <ul class="navbar__list">
                @foreach ($links as $link )
                <li class="navbar__item">
                    <a href="{{$link['href']}}">{{$link['link']}}</a>
                </li>
                @endforeach
                
            </ul>
        </div>
        <div>
            <input class="searchbar" type="text" placeholder="Search..">
        </div>
    </header>
</div>

