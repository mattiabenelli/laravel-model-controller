<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\PageController as PageController;
use App\Http\controllers\ComicController as ComicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
    
//     return view('home');
// })->name('homepage');

Route::get('/', [PageController::class, 'index'])->name('homepage');


// Route::get('/prodotti', function() {
//     $comics = config('comics.fumetti');
//     $itemBlueSection = config('comics.iconBlue');
    
//     return view('products', compact('comics', 'itemBlueSection'));
// })->name('products');
Route::get('/prodotti', [ComicController::class, 'index'])->name('products');

// Route::get('/prodotti/{id}', function($id){
//     $comics = config('comics.fumetti');
    
//     $item = '';
//     foreach($comics as $key => $comic){
//         if($id == $key){
//             $item = $comic;
//         }
//     }

//     return view('detail_comics', compact('comics', 'item'));

// })->name('detail-comics');

Route::get('/prodotti/{id}', [ComicController::class, 'single'])->name('detail-comics');
