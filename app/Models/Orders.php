<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function details(){
        return $this->hasMany(OrderDetails::class);
    }

    public function certificates(){
        return $this->hasOne(OrderCertificates::class);
    }

    public function places(){
        return $this->hasOne(OrderPlaces::class);
    }

    public function transactions(){
        return $this->hasOne(OrderTransactions::class);
    }
}
