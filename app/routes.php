<?php

# Home
Route::get('/', 'HomeController@index');
Route::get('contacts', 'HomeController@contacts');

# Admin Panel
Route::get('/admin', ['as' => 'login', 'uses' => 'AdminController@create']);
Route::get('/admin/home', 'AdminController@home');
Route::resource('admin', 'AdminController', ['only' => ['create', 'store', 'destroy']]);