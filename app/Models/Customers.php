<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $table ="customers";
    protected $fillable = ['ktp', 'nama', 'tempat_lahir', 'tanggal lahir', 'telepon', 'pekerjaan', 'npwp', 'alamat', 'confirmed'];
    protected $hidden;
}
