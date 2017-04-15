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

Route::get('/home', 'HomeController@index');

/**
 * Putanje kojima ima pristup samo administrator
 *
 */
Route::get('/admin-panel', 'AdminController@adminPanel');
Route::get('/user/delete/{user}', 'AdminController@deleteUser');
Route::get('/user/ban/{user}', 'AdminController@banUser');
Route::get('/user/unban/{user}', 'AdminController@unbanUser');
Route::get('user/role/{user}', 'AdminController@getRole');
Route::post('user/role/edit/{user}', 'AdminController@editRole');
Route::get('/admin/delete/text/{post}', 'AdminController@deleteTextPost');

/**
 * Putanje za text
 *
 */
Route::get('/createtext','AutorController@getTextForm');
Route::post('/create-post','AutorController@uploadText');
Route::get('/text-tutorials', 'TextTutorialsController@getTextTutorials');
Route::get('/text-post/{post}', 'TextTutorialsController@getPost');
Route::get('/text-posts/type/free', 'TextTutorialsController@getAllFreePosts');
Route::get('/text-posts/type/paid', 'TextTutorialsController@getAllPaidPosts');
Route::get('/text-posts/cat/{category}', 'TextTutorialsController@getPostsByCategory');
Route::get('/text-posts/delete/{post}', 'TextTutorialsController@deletePost');
Route::get('/text-posts/user/{user}', 'TextTutorialsController@getAllPostsByUser');
Route::post('/text-posts/create/comment/{post}', 'TextTutorialsController@createComment');
Route::post('/text-posts/search/', 'TextTutorialsController@searchPosts');


/**
 * Putanje za subscripiton
 *
 */
Route::get('/subscription/', 'SubscriptionController@getSubscription');
Route::post('/subscription/create/', 'SubscriptionController@createSubscription');

/**
 * ERROR PUTANJE
 *
 */
Route::get('/banned', 'ErrorController@getBanned');