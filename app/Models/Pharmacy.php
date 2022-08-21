<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Pharmacy extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'address'];
    protected $hidden = ['pivot'];

    public function products()
    {
        return $this->belongsToMany(Product::class , 'pharmacy_product');
    }
}
