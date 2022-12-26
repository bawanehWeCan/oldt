<?php

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\UserController;
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


Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/u/{username}', [UserController::class, 'userProfile'])->name('userProfile');

Route::get('/u/{username}/rate', [RateController::class, 'create'])->name('rateForm');
Route::get('/rate/{id}', [RateController::class, 'show'])->name('rateShow');



Route::group(['middleware' => ['auth']], function () { 
    Route::post('/storerate', [RateController::class, 'store'])->name('storeRate');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('getNotification');
    Route::post('/notescount', [NotificationController::class, 'count'])->name('getNotificationCount');
    Route::post('/whois', [NotificationController::class, 'whois'])->name('whois');
    Route::post('/approve-whois', [NotificationController::class, 'approvewhois'])->name('approvewhois');
    Route::post('/cancel-whois', [NotificationController::class, 'cancelwhois'])->name('cancelwhois');
    Route::get('/edit-profile', [UserController::class, 'editProfile'])->name('editProfile');
    Route::post('/edit-profile', [UserController::class, 'storeProfile'])->name('editProfile');

    

});


Route::get('login/{provider}', [SocialController::class, 'redirect']);
Route::get('login/facebook/callback',[SocialController::class, 'Callback']);

Route::get('/search', [UserController::class, 'search'])->name('searchForm');
Route::get('login/twitter/callback', [SocialController::class, 'TwitterCallback']);








