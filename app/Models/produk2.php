<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk2 extends Model
{
    public $fillable = ['id', 'nama', 'harga_beli', 'harga_jual'];
    public $table = 'produk';
}
