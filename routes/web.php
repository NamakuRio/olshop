<?php

use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    // return view('admin.index');
    $user = $request->user();

    dd($user->can('add products'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
