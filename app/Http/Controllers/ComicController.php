<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();
        $itemBlueSection = config('comics.iconBlue');
        
        return view('products', compact('comics', 'itemBlueSection'));
    }

    public function single($id){
        $comic = Comic::find($id);

        $item = [
            'item' => $comic
        ];

        return view('detail_comics', $item);
    }
}
