<?php 

namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use DB;
use App\Models\produk2;

class ProdukController2 extends Controller 
    { 
    public function show_eloquent() {
        $produk2 = produk2::all();
        return view('index', ['produk' => $produk2]);
    }

    public function insert_eloquent() {
        produk2::create(['id' => 4, 'nama' => 'Etalase', 'harga_beli' => 25000, 'harga_jual' => 21000
    ]); 
    }

    public function update_eloquent() {
        produk2::where('id', 3)
        ->update(['harga_beli' => '50000',
    ]);
    }
} 