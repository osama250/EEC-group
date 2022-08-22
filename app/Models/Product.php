<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pharmacy;
use App\Models\Pharmacay_product;


class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'description' , 'image'  , 'quantity'];

    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacy::class, "pharmacy_product", "product_id", "pharmacy_id")->withPivot('price')->withTimestamps();
    }
    public function pharmacyPrice()
    {
        return $this->hasMany(Pharmacay_product::class);
    }
}
