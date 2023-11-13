<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);



Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('/listings/{id}', function($id) {
    
//     $listing = Listing::find($id);
    
//     if($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }
// });


// Route::get('/hello', function() {
//     return response('<h1>Hello World!</h1>', 404)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo', 'bar')
//     ;
// });

// Route::get('/posts/{id}', function($id){
//     //dd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('search', function(Request $request) {
//     return $request->name . ' ' . $request->city;
// });