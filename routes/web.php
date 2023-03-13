<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use PhpParser\Node\Expr\List_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listing',[
        'heading' =>'latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function($id) {
    return view('listingcha',[
        'listing'=>Listing::find($id)
    ]);
});


Route::get('/hello',function(){
    return response('<h1>Hello World</h1>',200)
    ->header('Content-Type','text/plain');
}
);

Route::get('/posts/{id}',function($id){
    ddd($id);
    return response('Post '.$id);
})->where('id','[0-9]+');

Route::get('/search',function(Request $request ){
return $request->name;
});