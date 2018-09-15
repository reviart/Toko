<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');

Route::prefix('mh_roles')->group(function () {
  Route::get('/', 'ModelHasRolesController@index')->name('mhroles.index');
  Route::get('create', 'ModelHasRolesController@create')->name('mhroles.create');
  Route::post('store', 'ModelHasRolesController@store')->name('mhroles.store');
  Route::get('show/{id}', 'ModelHasRolesController@show')->name('mhroles.show');
  Route::get('edit/{id}', 'ModelHasRolesController@edit')->name('mhroles.edit');
  Route::put('update/{role_name_before}', 'ModelHasRolesController@update')->name('mhroles.update');
  Route::delete('destroy/{role_name}', 'ModelHasRolesController@destroy')->name('mhroles.destroy');
});

Route::prefix('mh_permissions')->group(function () {
  Route::get('/', 'ModelHasPermissionsController@index')->name('mh_permissions.index');
  Route::get('create', 'ModelHasPermissionsController@create')->name('mh_permissions.create');
  Route::post('store', 'ModelHasPermissionsController@store')->name('mh_permissions.store');
  Route::get('show/{id}', 'ModelHasPermissionsController@show')->name('mh_permissions.show');
  Route::get('edit/{id}', 'ModelHasPermissionsController@edit')->name('mh_permissions.edit');
  Route::put('update/{permission_name_before}', 'ModelHasPermissionsController@update')->name('mh_permissions.update');
  Route::delete('destroy/{permission_name}', 'ModelHasPermissionsController@destroy')->name('mh_permissions.destroy');
});

Route::prefix('rh_permissions')->group(function () {
  Route::get('/', 'RoleHasPermissionsController@index')->name('rh_permissions.index');
  Route::get('create', 'RoleHasPermissionsController@create')->name('rh_permissions.createRHP');
  Route::post('store', 'RoleHasPermissionsController@store')->name('rh_permissions.storeRHP');
  Route::get('show/{id}', 'RoleHasPermissionsController@show')->name('rh_permissions.show');
  Route::get('edit/{id}', 'RoleHasPermissionsController@edit')->name('rh_permissions.edit');
  Route::put('update/{permission_name_before}', 'RoleHasPermissionsController@update')->name('rh_permissions.update');
  Route::delete('destroy', 'RoleHasPermissionsController@destroy')->name('rh_permissions.destroy');
});



