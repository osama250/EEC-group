<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pharmacy;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'description' , 'imgae' , 'price' , 'quantity'];

    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacy::class , 'product__pharmacays');
    }
}
