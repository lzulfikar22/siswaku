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
    return 'Halo teman semua.<br>lorem ipsum';
});
Route::get('about', function () {
    return 'Ini bout';
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