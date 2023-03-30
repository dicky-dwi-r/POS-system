<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table ='produk';
    protected $fillable = [
        'id_gudang', 'nama_produk', 'harga_beli', 'diskon', 'harga_jual', 'harga_jual_kredit', 'stok',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
