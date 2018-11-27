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
use App\Demoyoue;

Route::get('/', function () {
    return view('welcome');
});
Route:: get('/contact/{id}',"adminyou@con");

Route::get('/you', function () {
    return view('admin.my');


});
Route :: get('/product',"adminyou@viewmodel");


Route :: get('/add',"adminyou@add");
Route :: get('/add/{id}',function ($std_no){
    $product=Demoyoue::find($std_no);
    $product->delete();
    return redirect('/product');
});
Route :: post('/product/store',"adminyou@add");

Route :: get('/edit/{id}',"adminyou@edit");
Route :: post('/edit/{id}',"adminyou@edit");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

