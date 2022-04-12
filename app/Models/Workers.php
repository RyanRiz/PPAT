<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;

    protected $table ="workers";
    protected $fillable = ['nama', 'tempat_lahir', 'tanggal lahir', 'status', 'tanggungan', 'awal_kerja', 'akhir_kerja', 'gaji', 'bonus'];
    protected $hidden;
}
