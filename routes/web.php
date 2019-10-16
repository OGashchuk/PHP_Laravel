<?php

Route::get('/', 'IndexController@index')->name('index');
Route::get('posts/{id}/show', 'PostController@getPost')->name('posts.show');

Route::get('tours', 'ToursController@index')->name('tours.index');
Route::get('tours/create', 'ToursController@create')->name('tours.create');
Route::post('tours/store', 'ToursController@store')->name('tours.store');
Route::get('tours/{id}/edit', 'ToursController@edit')->name('tours.edit');
Route::put('tours/{id}/update', 'ToursController@update')->name('tours.update');
Route::delete('tours/{id}/destroy', 'ToursController@destroy')->name('tours.destroy');


Route::post('/', 'OrdersController@store')->name('orders.store');



//county
Route::get('countries', 'CountriesController@index')->name('countries.index');
Route::get('countries/create', 'CountriesController@create')->name('countries.create');
Route::post('countries/store', 'CountriesController@store')->name('countries.store');
Route::get('countries/{id}/edit', 'CountriesController@edit')->name('countries.edit');
Route::put('countries/{id}/update', 'CountriesController@update')->name('countries.update');
Route::delete('countries/{id}/destroy', 'CountriesController@destroy')->name('countries.destroy');

//curort
Route::get('curorts', 'CurortsController@index')->name('curorts.index');
Route::get('curorts/create', 'CurortsController@create')->name('curorts.create');
Route::post('curorts/store', 'CurortsController@store')->name('curorts.store');
Route::get('curorts/{id}/edit', 'CurortsController@edit')->name('curorts.edit');
Route::put('curorts/{id}/update', 'CurortsController@update')->name('curorts.update');
Route::delete('curorts/{id}/destroy', 'CurortsController@destroy')->name('curorts.destroy');

//curort
Route::get('types', 'TypesController@index')->name('types.index');
Route::get('types/create', 'TypesController@create')->name('types.create');
Route::post('types/store', 'TypesController@store')->name('types.store');
Route::get('types/{id}/edit', 'TypesController@edit')->name('types.edit');
Route::put('types/{id}/update', 'TypesController@update')->name('types.update');
Route::delete('types{id}/destroy', 'TypesController@destroy')->name('types.destroy');

//date
Route::get('departuredates', 'DeparturedatesController@index')->name('departuredates.index');
Route::get('departuredates/create', 'DeparturedatesController@create')->name('departuredates.create');
Route::post('departuredates/store', 'DeparturedatesController@store')->name('departuredates.store');
Route::get('departuredates/{id}/edit', 'DeparturedatesController@edit')->name('departuredates.edit');
Route::put('departuredates/{id}/update', 'DeparturedatesController@update')->name('departuredates.update');
Route::delete('departuredates/{id}/destroy', 'DeparturedatesController@destroy')->name('departuredates.destroy');


Route::get('search/show', 'IndexController@search')->name('search.show');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

/*Route::get('admin', 'AdminController@index')->name('admin.index');*/

