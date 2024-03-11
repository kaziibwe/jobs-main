<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\listingController;

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

//   bellow '/' is the end point that we want to listen to  and the closure is the fuction
//  this returns welcome page in the view folder with no blade.php   thats how u can load the view in the route
// Route::get('/', function () {
//     return view('listings');
// });

// we pass data from the database to the to view which is the best  but we can pass the same data in the routes directly eg

// all listing
// Route::get('/', function () {
//     return view('listings',[
//         'heading' => 'latest listings',
//         'listings' => listing::all()   // all is an elequene
//      ] );
// });


//all listings by controllers
Route::get('/', [listingController::class, 'index'] );

// create show form to create new listing

Route::get('/listings/create',
 [listingController::class, 'create'] );



// single listing
// route::get('/listings/{id}', function($id) {
//  return view('listing', [
//     'listing' => Listing::find($id)  // find is an elequene
//  ]);
// });




//route model binding
// route::get('/listings/{id}', function($id) {
//    $listing = Listing::find($id) ;

//    if($listing) {
//       return view('listing', [
//          'listing' => $listing  // find is an elequene
//       ]);
//    } else{
//       abort("404");
//    }
// });



// OR
//route model binding
// route::get('/listings/{listing}', function(Listing $listing) {

//       return view('listing', [
//          'listing' => $listing  // find is an elequene
//       ]);

// });


// store listing data
route::post('/listings', [listingController::class, 'store' ] );

//show listing data for edit
route::get('/listings/{listing}/edit', [listingController::class, 'edit']);

//   update listing
route::put('/listings/{listing}' ,[listingController::class, 'update']);


//   delete listing
route::delete('/listings/{listing}' ,[listingController::class, 'destroy'])->middleware('auth');

// manage listings
route::get('/listings/manage',[listingController::class, 'manage'])->middleware('auth');




//single routing model with the controller
route::get('/listings/{listing}', [listingController::class, 'show' ] );

//show register / create form
Route::get('/register',[UserController::class, 'create']);

//create new users
Route::post('/users', [UserController::class,'store']);

// log user out
route::post('/logout', [UserController::class, 'logout']);

//show login / create form
Route::get('/login',[UserController::class, 'login']);

// login user
Route::post('/users/authenticate',[UserController::class, 'authenticate']);  // methods authenticate,login,logout,login,store,create which are worked upon in controllers



// example one
// Route::get('/hello' , function (){
//     return 'hello world';
// });

// Route::get('/hello' , function (){
//     return response('<h1>hello world<h2>');
// });

//  the output shows the html   <h1>hello world<h2>
// Route::get('/hello' , function (){
//     return response('<h1>hello world<h1>' ,200)
//        ->header('content-type', 'text/plain')
//        ->header('foo','bar');
// });
Route::get('/hello',[UserController::class ,'login']);

// // wild cards
// // the below wild cards can pass numbers and strings http://127.0.0.1:8000/posts/pottal or http://127.0.0.1:8000/posts/10
// route::get('/posts/{id}', function($id){
//     return response('post' .$id );
// });


// // for the wild card that only pass the numbers  http://127.0.0.1:8000/posts/10
// route::get('/posts/{id}', function($id){
//     ddd($id); //Dump, Die, Debug

//     return response('post' .$id );
// })->where ('id' ,'[0-9]+');


// // route for search
// route::get('/search', function(Request $request){
//     return($request->name .''. $request->city);

// });




// common resource routes and methods that are common or route to the methods that loads the view
// index- show all listing
// show single listing
// create show form to create new listing
// store- store new listings
// edit-show for the new edit listings
// update-update listings
// destroy- deleting listing


