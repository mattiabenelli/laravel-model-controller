<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();
        $itemBlueSection = config('comics.iconBlue');
        
        return view('prodotti', compact('comics', 'itemBlueSection'));
    }
}
