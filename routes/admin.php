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

Route::group([
  'namespace' => 'Admin',
  'prefix' => 'admin'
], function() {
  Route::get('/', 'DashboardController@index')->name('admin.dashboard.index');
});

Route::group([
  'namespace' => 'Admin',
  'as' => 'admin.',
  'prefix' => 'admin'
], function() {
  Route::resource('users', 'UserController');
  Route::resource('blog', 'BlogController');
  Route::resource('work', 'PortfolioController');
  Route::resource('code', 'SnippetController');
  Route::resource('code-categories', 'SnippetCategoryController');
  Route::get('/profile', 'UserController@profile')->name('profile');
  Route::resource('messages', 'MessageController');
  Route::resource('notifications', 'NotificationController');
  Route::resource('search', 'SearchController', ['only' => ['index']]);
});
