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
    return view('homepage');
});
Route::get('about', function () {
    return view('about');
});
// Opsi 1 penamaan route
// Route::get('halaman-rahasia', ['as' => 'secret', function(){
//     return 'Anda sedang melihat <strong> halaman Rahasia.</strong>';
// }]);

//Opsi 2 penamaan route
Route::get('halaman-rahasia',  function(){
    return 'Anda sedang melihat <strong> halaman Rahasia.</strong>';
})->name('secret');


Route::get('showmesecret', function(){
    return redirect()->route('secret');
});