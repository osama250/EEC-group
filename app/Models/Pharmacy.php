<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Pharmacay_product;



class Pharmacy extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'address'];

    public function products()
    {
        return $this->belongsToMany(Product::class, "pharmacy_product", "pharmacy_id", "product_id")->withPivot('price')->withTimestamps();
    }
    public function pharmacyPrice()
    {
        return $this->hasMany(Pharmacay_product::class , 'product_id');
    }

    public function orderCheapest()
    {
        return $this->hasMany(Pharmacay_product::class, "product_id" )->orderBy('price');
    }
}
