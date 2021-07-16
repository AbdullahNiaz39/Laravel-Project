<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/info','infoController@mail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/abouts', function(){
  return view('about.index');
});
Route::get('/admin/informs','informController@index');
  Route::get('informs/create','informController@create');
  Route::get('informs','informController@show');
  Route::post('/admin/informs','informController@store');
  Route::get('clic_delete/{id}','informController@delete');
Route::get('/informs/confirm', function(){
  return view('inform.confirm');
});
Route::get('/abouts','cardController@index');
  Route::get('/admin/cards/create','cardController@create');
  Route::get('card/{card}','cardController@show');
  Route::post('/abouts','cardController@store');
Route::get('/cards/food', function(){
return view('card.food');
});
Route::get('/admin/abouts','aboutController@index');
  Route::get('abouts/create','aboutController@create');
  Route::get('abouts/{id}','aboutController@show');
  Route::get('/admin/insert','aboutController@insertform');
 //Route::get('abouts/{about}','aboutController@show');
  Route::post('/admin/abouts','aboutController@store');
  Route::post('/add_data','aboutController@save');
  Route::get('/admin/edit/{about}','aboutController@edit');
  Route::get('click_delete/{id}','aboutController@delete');
 Route::post('/update/{about}','aboutController@update');


 Route::get('/admin/adminuser','adminController@index');
 Route::get('click_del/{id}','adminController@delete');
 Route::get('/admin/edituser/{id}','adminController@editing');
 Route::post('/updated/{id}','adminController@updated');

Route::get('/first', function(){
   return view('about.first');
 });
Route::get('about/confirm', function(){
  return view('about.confirm');
});
 Route::get('/admin', function(){
  return view('admin.home');
});
Route::get('abouts/confirm', function(){
  return view('about.confirm');
});





 // Route::put('abouts/{about}','aboutController@update');

// Route::get('abouts',function (){
  // return view('live');
// });


//Route::get('/','productsController@index');
Route::get('/laptop','productsController@laptop');
Route::get('/Mobile','productsController@mobile');
Route::get('/tablet','productsController@tablet');
Route::get('/create','productsController@create');
Route::get('/{product}','productsController@show');

//Route::post('/','productsController@store');

Route::get('/sellers/{seller}','sellerController@show');



