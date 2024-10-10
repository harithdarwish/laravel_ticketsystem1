<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\TicketController::class, 'readAllTicket'])->name('home')->middleware('auth');

Route::post('/save-ticket', [App\Http\Controllers\TicketController::class, 'createTicket'])->middleware('auth');

Route::get('/create-ticket', function () {
    return view('create-ticket');
})->middleware('auth'); 

Route::get('/issue-ticket', function () {
    return view('issue-ticket');
});

Route::get('/edit-ticket/{id}', [App\Http\Controllers\TicketController::class, 'viewTicketById'])->middleware('auth');

Route::post('/save-modified/{id}', [App\Http\Controllers\TicketController::class, 'modifiedTicket'])->middleware('auth');

Route::get('/deleteTicketById/{id}', [App\Http\Controllers\TicketController::class, 'deleteTicketById'])->middleware('auth');