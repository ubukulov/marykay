<?php

# Home
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('contacts', 'HomeController@contacts');

# Admin Panel
Route::get('auth', ['as' => 'login', 'uses' => 'AdminController@create']);
Route::get('admin', 'AdminController@index');
Route::get('admin/logout', 'AdminController@logout');
Route::resource('admin', 'AdminController', ['only' => ['home', 'create', 'store', 'destroy','edit']]);
Route::get('admin/pages', ['as' => 'admin/pages/index', 'uses' => 'AdminController@pages']);
Route::get('admin/pages/edit/{pages}', ['as' => 'admin/pages/edit', 'uses' => 'AdminController@edit_page']);
Route::post('admin/pages/edit/{page}', ['as' => 'admin/page/update', 'uses' => 'AdminController@update_page']);