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

Route::get ('/blogs-list/{language?}', 'BlogController@index') ->where([
    'language' => '^(uk|ru)?$'
])->name('blogs-list');

Route::get('/blogs-list/{page}/{language?}', 'BlogController@indexPagination')
    ->where([
        'page' => '^[2-9]{1}|[1-9]{1}[0-9]+$',
        'language' => '^(uk|ru)?$'
    ])->name('blogs-list-pagination');


Route::get('/category/{slugCaregory}/{language?}', 'BlogController@categoryIndex')
    ->where([
        'slugCaregory' => '^[a-z0-9-]+$',
        'language' => '^(uk|ru)?$'
    ])->name('category');

Route::get('/category/{slugCaregory}/{page}/{language?}', 'BlogController@categoryIndexPagination')
    ->where([
        'slugCaregory' => '^[a-z0-9-]+$',
        'page' => '^[2-9]{1}|[1-9]{1}[0-9]+$',
        'language' => '^(uk|ru)?$'
    ])->name('category-pagination');

Route::get('/blog/{slug}/{language?}', 'BlogController@blogIndex')
    ->where([
        'slug' => '^[a-z0-9-]+$',
        'language' => '^(uk|ru)?$'
    ])->name('blog');


/*  ADMIN   */
Route::get('/login', 'LoginController@loginPage');


Route::post('/login', 'LoginController@login');


Route::get('/admin/add-slider', 'AdminSliderController@addSliderForm');
Route::get('/admin/sliders', 'AdminSliderController@adminSliders');


Route::post('/admin/sliders/delete', 'AdminSliderController@deleteSlide');
Route::post('/admin/add-slider/add', 'AdminSliderController@addSlider');





Route::get('/admin', 'AdminBlogController@adminBlogs');

Route::get('/admin/add-blog', 'AdminBlogController@addBlogForm');

Route::post('/admin/add-blog/add', 'AdminBlogController@addBlog');

Route::post('/admin/add-blog/delete', 'AdminBlogController@deleteBlog');

Route::get('/admin/{page}', 'AdminBlogController@indexPagination')
    ->where([
        'page' => '^[2-9]{1}|[1-9]{1}[0-9]+$'
    ]);

/* logout*/
Route::get('/logout', 'LogoutController@logout');


/* admin response*/
Route::get('/admin/response', 'ResponseController@responseShowIndex');

Route::get('/admin/add-response', 'ResponseController@addResponseForm');

Route::post('/admin/add-response/add', 'ResponseController@addResponse');

Route::post('/admin/response/delete', 'ResponseController@deleteResponse');

Route::get('/admin/response/{page}', 'ResponseController@indexPagination')
    ->where([
        'page' => '^[2-9]{1}|[1-9]{1}[0-9]+$'
    ]);

Route::get('/admin/category', 'AdminCategoryController@categoryshow');

Route::get('/admin/add-category', 'AdminCategoryController@addcategoryform');

Route::post('/admin/add-category/add', 'AdminCategoryController@addcategory');



Route::get ('/{language?}', 'HomeController@homeIndex')
    ->where([
        'language' => '^(uk|ru)?$'
    ])->name('home');



Route::get ('responses/{language?}', 'ResponsePageController@responsePageIndex')
    ->where([
        'language' => '^(uk|ru)?$'
    ])->name('responses');


Route::post ('responses/', 'ResponsePageController@showOneResp');

//Route::get('/home', 'HomeController@index')->name('home');
