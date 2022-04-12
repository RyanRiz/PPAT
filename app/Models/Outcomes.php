<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outcomes extends Model
{
    use HasFactory;

    protected $table ="outcomes";
    protected $fillable = ['tanggal_pembelian', 'nama_barang', 'jumlah_barang', 'harga'];
    protected $hidden;
}
