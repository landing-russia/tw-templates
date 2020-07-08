<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/tailwind/ui/shells/stacked-layouts-1', 'tailwind.ui.shells.stacked-layouts-1');
Route::view('/tailwind/ui/shells/stacked-layouts-2', 'tailwind.ui.shells.stacked-layouts-2');
Route::view('/tailwind/ui/shells/stacked-layouts-3', 'tailwind.ui.shells.stacked-layouts-3');
Route::view('/tailwind/ui/shells/stacked-layouts-4', 'tailwind.ui.shells.stacked-layouts-4');
Route::view('/tailwind/ui/shells/stacked-layouts-5', 'tailwind.ui.shells.stacked-layouts-5');
Route::view('/tailwind/ui/shells/stacked-layouts-6', 'tailwind.ui.shells.stacked-layouts-6');
Route::view('/tailwind/ui/shells/stacked-layouts-7', 'tailwind.ui.shells.stacked-layouts-7');

Route::view('/tailwind/ui/shells/sidebar-layouts-1', 'tailwind.ui.shells.sidebar-layouts-1');
Route::view('/tailwind/ui/shells/sidebar-layouts-2', 'tailwind.ui.shells.sidebar-layouts-2');
Route::view('/tailwind/ui/shells/sidebar-layouts-3', 'tailwind.ui.shells.sidebar-layouts-3');
Route::view('/tailwind/ui/shells/sidebar-layouts-4', 'tailwind.ui.shells.sidebar-layouts-4');
Route::view('/tailwind/ui/shells/sidebar-layouts-5', 'tailwind.ui.shells.sidebar-layouts-5');
Route::view('/tailwind/ui/shells/sidebar-layouts-6', 'tailwind.ui.shells.sidebar-layouts-6');
Route::view('/tailwind/ui/shells/sidebar-layouts-7', 'tailwind.ui.shells.sidebar-layouts-7');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
