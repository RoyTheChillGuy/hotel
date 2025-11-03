<?php

use App\Livewire\Test;
use App\Livewire\About;
use App\Livewire\Login;
use App\Livewire\Contact;
use App\Livewire\Dashboard;
use App\Livewire\Hotels\HotelEdit;
use App\Livewire\Hotels\HotelList;
use App\Livewire\Hotels\HotelCreate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{nama}', Test::class);
Route::get('/about', About::class);
Route::get('/contact', Contact::class);

Route::get('/login', Login::class);

Route::get('/dashboard', Dashboard::class);
Route::get('/hotels', HotelList::class);
Route::get('/hotels/create', HotelCreate::class);
Route::get('/hotels/{id}/edit', HotelEdit::class);