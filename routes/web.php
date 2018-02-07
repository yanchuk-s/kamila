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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get ('/', 'HomeController@homeIndex');

Route::get ('/blogs-list', 'BlogController@index');

Route::get('/blogs-list/{page}', 'BlogController@indexPagination')
    ->where([
        'page' => '^[2-9]{1}|[1-9]{1}[0-9]+$'
    ]);


Route::get('/category/{slugCaregory}', 'BlogController@categoryIndex')
    ->where([
        'slugCaregory' => '^[a-z0-9-]+$'
    ]);

Route::get('/category/{slugCaregory}/{page}', 'BlogController@categoryIndexPagination')
    ->where([
        'slugCaregory' => '^[a-z0-9-]+$',
        'page' => '^[2-9]{1}|[1-9]{1}[0-9]+$'
    ]);

Route::get('/blog/{slug}', 'BlogController@blogIndex')
    ->where([
        'slug' => '^[a-z0-9-]+$'
    ]);


/*  ADMIN   */
Route::get('/login', 'LoginController@loginPage');

Route::post('/login', 'LoginController@login');


Route::get('/admin', 'AdminBlogController@adminBlogs');

Route::get('/admin/{page}', 'AdminBlogController@indexPagination')
    ->where([
        'page' => '^[2-9]{1}|[1-9]{1}[0-9]+$'
    ]);

/* logout*/
Route::get('/logout', 'LogoutController@logout');

//Route::get('/home', 'HomeController@index')->name('home');
