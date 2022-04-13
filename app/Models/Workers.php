<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;

    protected $table ="workers";
    protected $fillable = ['ktp', 'nama', 'tempat_lahir', 'tanggal lahir', 'alamat', 'pekerjaan', 'email', 'handphone', 'status', 'tanggungan', 'awal_kerja', 'akhir_kerja', 'gaji', 'bonus'];
    protected $hidden;
}
