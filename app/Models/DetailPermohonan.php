<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPermohonan extends Model
{
    use HasFactory;

    public function permohonan(){
        return $this->belongsTo(Permohonan::class);
    }
}
