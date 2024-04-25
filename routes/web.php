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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage.home');

Route::get('/artikel', [App\Http\Controllers\HomepageController::class, 'artikel'])->name('homepage.artikel');
Route::get('/sekolah', [App\Http\Controllers\HomepageController::class, 'sekolah'])->name('homepage.sekolah');
Route::get('/job', [App\Http\Controllers\HomepageController::class, 'job'])->name('homepage.job');

Route::get('/artikel/cari', [App\Http\Controllers\HomepageController::class, 'cariartikel'])->name('homepage.cariartikel');
Route::get('/job/cari', [App\Http\Controllers\HomepageController::class, 'carijob'])->name('homepage.carijob');
Route::get('/lowongan/cari', [App\Http\Controllers\HomepageController::class, 'carijob'])->name('homepage.carilowongan');

Route::get('/sekolah/cari', [App\Http\Controllers\HomepageController::class, 'carisekolah'])->name('homepage.carisekolah');
Route::get('/artikel/{id}', [App\Http\Controllers\HomepageController::class, 'detailartikel'])->name('homepage.detailartikel');	
Route::get('/sekolah/{id}', [App\Http\Controllers\HomepageController::class, 'detailsekolah'])->name('homepage.detailsekolah');	
Route::get('/lowongan/', [App\Http\Controllers\HomepageController::class, 'detailsekolah'])->name('homepage.detaillowongan');	

Route::group(['prefix' => 'admin', 'middleware' => ['level_admin','auth']], function(){
    // users route
	
	Route::get('/home', [App\Http\Controllers\AdminController::class, 'Home'])->name('admin.home')->middleware('level_admin');

    //Route::get('/tampilkanGrafik', [App\Http\Controllers\AdminController::class, 'tampilkanGrafik'])->name('admin.home')->middleware('level_admin');
	 		
    Route::get('/artikel', [App\Http\Controllers\AdminController::class, 'tampilartikel'])->name('artikel.home')->middleware('level_admin');
    Route::get('/artikel/tambah', [App\Http\Controllers\AdminController::class, 'tambahartikel'])->name('artikel.tambah')->middleware('level_admin');
    Route::delete('/artikel/{id}', [App\Http\Controllers\AdminController::class, 'hapusartikel'])->name('artikel.hapus')->middleware('level_admin');	
    Route::post('/artikel/', [App\Http\Controllers\AdminController::class, 'prosestambahartikel'])->name('artikel.prosestambah')->middleware('level_admin');
    Route::get('/artikel/{id}', [App\Http\Controllers\AdminController::class, 'editartikel'])->name('artikel.edit')->middleware('level_admin');
    Route::put('/artikel/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdateartikel'])->name('artikel.prosesupdate')->middleware('level_admin'); 	
	
    Route::get('/kategori', [App\Http\Controllers\AdminController::class, 'tampilkategori'])->name('kategori.home')->middleware('level_admin');
    Route::get('/kategori/tambah', [App\Http\Controllers\AdminController::class, 'tambahkategori'])->name('kategori.tambah')->middleware('level_admin');
    Route::delete('/kategori/{id}', [App\Http\Controllers\AdminController::class, 'hapuskategori'])->name('kategori.hapus')->middleware('level_admin');	
    Route::post('/kategori/', [App\Http\Controllers\AdminController::class, 'prosestambahkategori'])->name('kategori.prosestambah')->middleware('level_admin');
    Route::get('/kategori/{id}', [App\Http\Controllers\AdminController::class, 'editkategori'])->name('kategori.edit')->middleware('level_admin');
    Route::put('/kategori/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdatekategori'])->name('kategori.prosesupdate')->middleware('level_admin');	
	

    Route::get('/sekolah', [App\Http\Controllers\AdminController::class, 'tampilsekolah'])->name('sekolah.home')->middleware('level_admin');
    Route::get('/sekolah/tambah', [App\Http\Controllers\AdminController::class, 'tambahsekolah'])->name('sekolah.tambah')->middleware('level_admin');
    Route::delete('/sekolah/{id}', [App\Http\Controllers\AdminController::class, 'hapussekolah'])->name('sekolah.hapus')->middleware('level_admin');	
    Route::post('/sekolah/', [App\Http\Controllers\AdminController::class, 'prosestambahsekolah'])->name('sekolah.prosestambah')->middleware('level_admin');
    Route::get('/sekolah/{id}', [App\Http\Controllers\AdminController::class, 'editsekolah'])->name('sekolah.edit')->middleware('level_admin');
    Route::put('/sekolah/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdatesekolah'])->name('sekolah.prosesupdate')->middleware('level_admin'); 
    
   
    Route::get('/lowongan', [App\Http\Controllers\AdminController::class, 'tampillowongan'])->name('lowongan.home')->middleware('level_admin');
    Route::get('/lowongan/tambah', [App\Http\Controllers\AdminController::class, 'tambahlowongan'])->name('lowongan.tambah')->middleware('level_admin');
    Route::delete('/lowongan/{id}', [App\Http\Controllers\AdminController::class, 'hapuslowongan'])->name('lowongan.hapus')->middleware('level_admin');	
    Route::post('/lowongan/', [App\Http\Controllers\AdminController::class, 'prosestambahlowongan'])->name('lowongan.prosestambah')->middleware('level_admin');
    Route::get('/lowongan/{id}', [App\Http\Controllers\AdminController::class, 'editlowongan'])->name('lowongan.edit')->middleware('level_admin');
    Route::put('/lowongan/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdatelowongan'])->name('lowongan.prosesupdate')->middleware('level_admin'); 		
	
	
}); 	