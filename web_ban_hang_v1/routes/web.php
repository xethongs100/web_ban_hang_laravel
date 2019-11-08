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

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/','PageController@getListProduct')->name('home');
Route::get('/login','PageController@re_Login')->name('re_login');
Route::post('login','PageController@Login')->name('login');
Route::get('logout','PageController@Logout')->name('logout');


Route::group(['prefix'=>'register'],function(){
	Route::get('/new-register','PageController@backRegister')->name('b_register');
	Route::post('register','PageController@Register')->name('register');
});


Route::group(['prefix'=>'tai-khoan','middleware'=>'checkLogin'],function(){
	Route::get('user-profile/{id}','PageController@Profile')->name('profile-user');
	Route::post('change-profile/{id}','PageController@ChangeProfile')->name('c_profile');
	Route::get('edit-password/{id}','PageController@EditPassword')->name('edit_password');
	Route::post('change-password/{id}','PageController@ChangePassword')->name('c_password');
});


Route::group(['prefix'=>'quan-ly-user','middleware'=>'checkLogin'],function(){
	Route::get('danh-sach-user','QuanLyUserController@getListUser')->name('lay-ds-user');
	Route::get('xoa-user/{id}','QuanLyUserController@deleteUser')->name('delete-user');
});


Route::group(['prefix'=>'quan-ly-product','middleware'=>'checkLogin'],function(){
	Route::get('danh-sach-product','QuanLyProductController@getListProduct')->name('lay-ds-product');
	Route::get('add-product','QuanLyProductController@re_addProduct')->name('re-add-product');
	Route::post('add-product',['as'=>'add-product','uses'=>'QuanLyProductController@addProduct']);
	Route::get('sua-product/{id}','QuanLyProductController@re_editProduct')->name('re_edit-Product');
	Route::post('sua-product/{id}','QuanLyProductController@updateProduct')->name('update-Product');
	Route::get('xoa-product/{id}','QuanLyProductController@deleteProduct')->name('delete-product');
});

Route::group(['prefix'=>'cart'],function(){
	Route::get('them-san-pham/{id}','CartController@addCart')->name('add-cart');
	Route::get('gio-hang','CartController@show_cart')->name('list-cart');
	Route::get('xoa-gio-hang/{id}','CartController@delete_cart')->name('delete-cart');
	Route::get('cap-gio-hang/{id}/{qty}','CartController@updateCart');
});



// Route::get('upload-file',function(){
// 	return view('upload');
// });

