<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    use HasFactory;

    protected $table='item_inventory';
    public $timestamps=false;

    public function product(){
        return $this->belongsTo(Produk::class,'produk_id');
    }
}
