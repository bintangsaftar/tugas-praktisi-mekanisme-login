<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukController2;


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

    Route::get('/show/{id?}', function($id=1) { 
        echo "Nilai Parameter Adalah $id."; 
    });

    Route::get('/edit/{nama}', function($nama) {
        echo "Nilai Parameter Adalah $nama.";
    }) -> where('nama', '[A-Za-z]+');

    Route::get('/index', function() {
        echo "<a href='".route('create')."'>Akses Route Dengan Nama </a>";
    });

    Route::get('/create', function() {
        echo "Route Diakses menggunakan Nama";
    }) -> name('create');

    Route::get('/produk', [ProdukController::class, 'index']);

    Route::get('/produk/show', [ProdukController::class, 'show']);

    Route::get('/layout',function(){
        $title = 'Layout Blade Bintang';
        $konten = 'Ini isi dari Layout Bintang';
        return view('konten.halaman',compact('title','konten'));
    });

    Route::resource('produk', ProdukController::class);

    Route::get('/liat',[ProdukController2::class,'show_eloquent']);
    Route::get('/tambah',[ProdukController2::class,'insert_eloquent']);
    Route::get('/edit',[ProdukController2::class,'update_eloquent']);


Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
