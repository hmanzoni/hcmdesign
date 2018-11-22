<?php

Route::get('/', ['as'=>'index', 'uses' => 'Secciones@home'])->name('home');
Route::get('/aboutme', ['as'=>'aboutme', 'uses' => 'Secciones@aboutme'])->name('about');

Route::resource('messages', 'MessagesController');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');