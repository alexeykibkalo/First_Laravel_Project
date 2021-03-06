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
  //  return view('showBlogs');
//});
Route::get('/','ViewBlogsController@ShowBlobsList')->name('root');
Route::get('/home','HomeController@home');
// Route::get('/create', 'CreateUserController@create');
Route::get('/showBlog','SingleBlogViewController@View');
Route::get('/createBlog', 'CreateNewBlogController@ShowView');
Route::post('/newBlog','CreateNewBlogController@Create');
