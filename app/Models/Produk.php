<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table='produk';
    public $timestamps=false;

    public function store(){
        return $this->belongsTo(Toko::class,'toko_id');
    }
}
