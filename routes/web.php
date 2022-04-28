<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

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

Route::get('/listings', static function () {
	return view('listing.listings', ['heading' => 'All Job Listings', 'listings' => Listing::all()]);
});
Route::get('/listing/{listing}', static function (Listing $listing) {
	return view('listing.listing', ['heading' => 'All Job Listings', 'listing' => $listing]);
});
