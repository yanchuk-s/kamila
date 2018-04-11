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



Route::get ('rulers/{language?}', 'RulersController@rulersPage')
    ->where([
        'language' => '^(uk|ru)?$'
    ])->name('rulers');

//Route::get('/home', 'HomeController@index')->name('home');


Route::get ('/admin/rulers', 'AdminRulersController@showRulers');
Route::post ('/admin/rulers/edit', 'AdminRulersController@editRulers');

//EDIT

Route::get('/admin/edit-blog/{id}', 'AdminBlogController@showBlogEdit')->name('showBlogEdit');
Route::post('/admin/edit-blog/edit', 'AdminBlogController@editBlog')->name('editBlog');


Route::get('/admin/edit-slider/{id}', 'AdminSliderController@showSliderEdit')->name('showSliderEdit');
Route::post('/admin/edit-slider/edit', 'AdminSliderController@editSlide')->name('editSlide');


Route::get('/admin/edit-response/{id}', 'ResponseController@showResponseEdit')->name('showResponseEdit');
Route::post('/admin/edit-response/edit', 'ResponseController@editResponse')->name('editResponse');

Route::get('/admin/edit-category/{id}', 'AdminCategoryController@showCategoryEdit')->name('showCategoryEdit');
Route::post('/admin/edit-category/edit', 'AdminCategoryController@editCategory')->name('editCategory');

// Callback


Route::get ('/contact/{language?}', 'ContactController@contactPage')
    ->where([
        'language' => '^(uk|ru)?$'
    ])->name('contact');

Route::post('contact/send','ContactController@send');


Route::post('/callback','HomeController@collbackModal');

Route::post('/orderColl','HomeController@orderColl');



Route::post('/upload/images', 'AdminBlogController@uploadImages');


//CLIENTS



Route::get('/admin/clients', 'AdminClientController@showClients');

Route::get('/admin/clients/{page}', 'AdminClientController@indexPagination')
    ->where([
        'page' => '^[2-9]{1}|[1-9]{1}[0-9]+$'
    ]);

Route::post('/admin/client/delete', 'AdminClientController@deleteClient');

Route::get('/admin/add-clients', 'AdminClientController@addClientForm');

Route::post('/admin/add-clients/add', 'AdminClientController@addClient');

Route::post('/admin/add-clients/edit', 'AdminClientController@editClient');


Route::get('/admin/client/{id}', 'AdminClientController@clientIndex')
    ->where([
        'id' => '^[a-z0-9-]+$'
    ])->name('client');

Route::get('/admin/edit-client/{id}', 'AdminClientController@showClientEdit')
    ->where([
        'id' => '^[a-z0-9-]+$'
    ])->name('client');
