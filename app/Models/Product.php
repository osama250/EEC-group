<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pharmacy;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'description' , 'image' , 'price' , 'quantity'];
    protected $hidden   = ['pivot'];

    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacy::class , 'pharmacy_product');
    }
}
