<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){
        $comics = config('comics');

        $items=[
            [
                'image' => ('/img/buy-comics-digital-comics.png'),
                'text' => 'Digital Comics',
            ],
            [
                'image' => ('/img/buy-comics-merchandise.png'),
                'text' => 'DC Merchandise',
            ],
            [
                'image' => ('/img/buy-comics-subscriptions.png'),
                'text' => 'Subscription',
            ],
            [
                'image' => ('/img/buy-comics-shop-locator.png'),
                'text' => 'Comic shop locator',
            ],
            [
                'image' => ('/img/buy-dc-power-visa.svg'),
                'text' => 'DC power visa',
            ],
        ];
    
    return view('home')
    ->with('comics',$comics)
    ->with('items',$items);
    }

    public function show($id){
        $comics = config('comics');

        $single_id = $comics[$id];

        return view('show',["comics" => $single_id]);
    }
}
