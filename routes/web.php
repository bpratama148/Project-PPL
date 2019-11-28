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

//halaman awal guest//
Route::get('/','PageController@guest')->middleware('guest');


//login//
Route::get('/login','LoginController@index'); 
Route::post('/postlogin','LoginController@login'); 

//logout//
Route::get('/logout','LoginController@logout'); 

//daftar//
Route::get('/daftar','DaftarController@index');
Route::post('/daftar','DaftarController@store');

//Admin//
Route::get('/admin','AdminController@index')->middleware('auth:admin'); 
Route::get('/web','AdminController@web'); 
Route::get('/admin-pengguna','AdminController@pengguna'); 

//Admin-AboutKoi//
Route::get('/admin-koiweb','KoiController@adminweb'); 
Route::get('/koi-admin','KoiController@indexadmin'); 
Route::post('/koi/{id}/update','KoiController@update');
Route::get('/koi/create','KoiController@create');
Route::post('/koi','KoiController@store');
Route::get('/koi/{id}/edit','KoiController@edit');
Route::get('/koi/{id}/delete','KoiController@delete');
Route::get('/admin-koimore/{id}','KoiController@adminmore');

//Admin-Forum//
Route::get('/admin-forum','ForumController@forum'); 
Route::get('/forum/{id}/delete','ForumController@deleteadmin');
Route::get('/forum-more/{id}','ForumController@more');

//Admin-Gallery//
Route::get('/admin-galeri','GalleryController@galeri'); 
Route::get('/admin-wgaleri','GalleryController@galeriweb');
Route::get('/galeri/{id}/delete','GalleryController@deleteadmin');
Route::get('/galeri-more/{id}','GalleryController@more');

//Admin- Data Pakar//
Route::get('/admin-pakar','AdminController@pakar'); 
Route::get('/admin-pakarweb','AdminController@pakarweb'); 
Route::post('/pakar/{id}/update','DataPakarController@update');
Route::get('/pakar/create','DataPakarController@create');
Route::post('/pakar','DataPakarController@store');
Route::get('/pakar/{id}/edit','DataPakarController@edit');
Route::get('/pakar/{id}/delete','DataPakarController@delete');


//Admin-Data Gejala//
Route::get('/admin-gejala','AdminController@gejala');
Route::get('/admin-gejalaweb','AdminController@gejalaweb'); 
Route::post('/gejala/{id}/update','DiagnosaController@updategejala');
Route::get('/gejala/create','DiagnosaController@creategejala');
Route::post('/gejalacrud','DiagnosaController@storegejala');
Route::get('/gejala/{id}/edit','DiagnosaController@editgejala');
Route::get('/gejala/{id}/delete','DiagnosaController@deletegejala');

//Admin-Data Diagnosa//
Route::get('/admin-diagnosa','DiagnosaController@diagnosa');

Route::post('/diagnosa/{id}/update','DiagnosaController@updatediagnosa');
Route::get('/diagnosa/create','DiagnosaController@creatediagnosa');
Route::post('/diagnosa','DiagnosaController@storediagnosa');
Route::get('/diagnosa/{id}/edit','DiagnosaController@editdiagnosa');
Route::get('/diagnosa/{id}/delete','DiagnosaController@deletediagnosa');


//pengguna//
Route::get('/pengguna','PenggunaController@index')->middleware('auth:pengguna');

//pengguna-forum//
Route::get('/pengguna-forum','ForumController@index')->middleware('auth:pengguna');
Route::post('/forum','ForumController@store')->middleware('auth:pengguna');

//pengguna-galeri//
Route::get('/pengguna-galeri','GalleryController@index')->middleware('auth:pengguna');
Route::post('/galeri','GalleryController@store')->middleware('auth:pengguna');

//pengguna-pakar//
Route::get('/pengguna-pakar','PenggunaController@pakar')->middleware('auth:pengguna');

//pengguna-AboutKoi//
Route::get('/pengguna-koi','KoiController@index')->middleware('auth:pengguna');
Route::get('/koimore/{id}','KoiController@koimore')->middleware('auth:pengguna');

//pengguna-MyPost//
Route::get('/mypost/{pengguna}','ForumController@mypost')->middleware('auth:pengguna')->name('mypost');
Route::get('/forum/{id}/edit','ForumController@edit')->middleware('auth:pengguna');
Route::post('/forum/{id}/update','ForumController@update')->middleware('auth:pengguna');
Route::get('/forum/{id}/delete','ForumController@delete')->middleware('auth:pengguna');

//pengguna-MyGallery//
Route::get('/mygallery/{pengguna}','GalleryController@mygallery')->middleware('auth:pengguna')->name('mygallery');
Route::get('/gallery/{id}/edit','GalleryController@edit')->middleware('auth:pengguna');
Route::post('/gallery/{id}/update','GalleryController@update')->middleware('auth:pengguna');
Route::get('/gallery/{id}/delete','GalleryController@delete')->middleware('auth:pengguna');
Route::get('/galeri-see/{id}','GalleryController@see')->middleware('auth:pengguna');

//pengguna-diagnosa//
Route::get('/pengguna-diagnosa','DiagnosaController@index')->middleware('auth:pengguna');
Route::get('/pengguna-dstart','DiagnosaController@start')->middleware('auth:pengguna');
Route::post('/gejala','DiagnosaController@store')->middleware('auth:pengguna');
Route::get('/user-hasildiagnosa','DiagnosaController@hasil')->middleware('auth:pengguna');

Route::get('/hasil/{id}/delete','DiagnosaController@deletehasil')->middleware('auth:pengguna');




//pakar//
Route::get('/pakar','PakarController@index')->middleware('auth:pakar');

//pakar-forum//
Route::get('/pakar-forum','PakarController@forum')->middleware('auth:pakar'); 

//pakar-gallery//
Route::get('/pakar-galeri','PakarController@galeri')->middleware('auth:pakar'); 


//balas-forum Pengguna//
Route::get('/forum-balas/{id}','ForumController@balas')->middleware('auth:pengguna');
//balas-forum Dokter//
Route::get('/forum-balaspakar/{id}','ForumController@balaspakar')->middleware('auth:pakar');

//komen-forum//
Route::post('/komen/addComment/{forum}','CommentController@addcomment')->name('addComment')->middleware('auth:pengguna,pakar');


//balas-galeri Pengguna//
Route::get('/galeri-balas/{id}','GalleryController@balas')->middleware('auth:pengguna');
//balas-galeri Dokter//
Route::get('/galeri-balaspakar/{id}','GalleryController@balaspakar')->middleware('auth:pakar');

//komen-galeri//
Route::post('/komen/addCommentg/{galeri}','CommentController@addcommentg')->name('addCommentg')->middleware('auth:pengguna,pakar');