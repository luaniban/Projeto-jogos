<?php
use App\Livewire\Jogos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',Jogos\Index::class)->name('home');

Route::get('/login', Jogos\Login::class)->name('login');
