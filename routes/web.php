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
// Tampilan awal
Route::get('/', function () {
    return view('pages/homepage');
});

//Tampilan about
Route::get('about', function () {
    return view('pages.about');
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

//Bikin route siswa

//Untuk masukin data cara 1
Route::get('siswa', function(){
    $siswa = ['Ujang Codet','Asep Robot','Jajang Berlian'];
    return view('siswa.index', compact('siswa'));
});

//Untuk masukin data cara2
// Route::get('siswa', function(){
//     $siswa = ['Ujang Codet','Asep Robot','Jajang Berlian'];
//     return view('siswa.index')->with('siswa', $siswa);
// });
//Untuk masukin data cara3
// Route::get('siswa', function(){
//     $siswa = ['Ujang Codet','Asep Robot','Jajang Berlian'];
//     return view('siswa.index', ['siswa' => $siswa]);
// });