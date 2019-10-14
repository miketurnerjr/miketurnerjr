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
  Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard.index');
  Route::resource('users', 'UserController');
  Route::resource('blog', 'BlogController');
  Route::resource('work', 'PortfolioController');
  Route::resource('code', 'SnippetController');
  Route::resource('code-categories', 'SnippetCategoryController');
  Route::resource('social-media', 'SocialMediaController', [
    'except' => [
      'show'
    ]
  ]);
  Route::resource('clients', 'ClientController');
  Route::Resource('media-library', 'MediaLibraryController');

  Route::get('/profile', 'UserController@profile')->name('profile');
  Route::get('/update-password', 'UserCOntroller@getUpdatePassword')->name('update-password');
  Route::post('/update-password', 'UserController@savePassword')->name('save-password');
  Route::resource('messages', 'MessageController');
  Route::resource('notifications', 'NotificationController');
  Route::resource('search', 'SearchController', ['only' => ['index']]);
  Route::resource('seo', 'SeoToolController');

  Route::group([
    'namespace' => 'Content',
    'prefix' => 'content'
  ], function() {
    Route::resource('about', 'AboutMeController');
  });

  
  
});
