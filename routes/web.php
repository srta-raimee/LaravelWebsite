<?php

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
use App\http\controllers\PartyController;

Route::get('/',[PartyController::class, 'index']); 
Route::get('/parties/create',[PartyController::class, 'create']); 
Route::get('/signin', [PartyController::class, 'signin']);
Route::get('/signup', [PartyController::class, 'signup']);
Route::post('/parties', [PartyController::class, 'store']);
Route::get('/parties/{id}', [PartyController::class, 'show']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
