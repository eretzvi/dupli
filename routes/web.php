<?php



Route::get('/', function () {
    return view('master');
});
Route::get('/', 'UserController@getJson');
Route::post('/', 'UserController@postJson');

Route::get('cms', 'CmsUserController@index');
Route::resource('cms/users', 'CmsUserController');
Route::get('cms/users{id}/edit', 'CmsUserController@update');
Route::get('cms/users{id}', 'CmsUserController@destroy');
 


# User

Route::get('user/logout', 'UserController@getLogout');
Route::get('user/login', 'UserController@getLogin');
Route::get('user/register', 'UserController@getRegister');

Route::post('user/login', 'UserController@postLogin');
Route::post('user/register', 'UserController@postRegister');

 
# Pages
Route::get('{url}', 'PagesController@boot');

