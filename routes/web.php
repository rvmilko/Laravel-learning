<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Show edit form
Route::get('listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Edit Submit to Update
Route::put('listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete
Route::delete('listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Show single
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

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