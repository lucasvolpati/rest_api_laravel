<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['as' => 'api.', 'controller' => ApiController::class], function() {
   Route::get('/all_books/{limit?}', 'getAllBooks')->name('all_books');
   Route::get('/book/{id}', 'getBookById')->name('book');
   Route::get('/get_users/', 'getUsers')->name('users');
});
