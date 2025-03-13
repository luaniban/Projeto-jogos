<?php
use App\Livewire\Jogos;
use Illuminate\Support\Facades\Route;


Route::get('/home',Jogos\Index::class)->name('home');

Route::get('/', Jogos\Login::class)->name('login');
