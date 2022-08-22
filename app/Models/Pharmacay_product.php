<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacay_product extends Model
{
    use HasFactory;
    protected $table    = 'pharmacy_product';
    protected $fillable = ['pharmacy_id' , 'product_id' , 'price'];

    public function phermacy()
    {
        return $this->hasMany(Pharmacy::class);
    }
}
