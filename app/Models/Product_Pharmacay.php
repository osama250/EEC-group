<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Pharmacay extends Model
{
    use HasFactory;
    protected $table    = 'product__pharmacays';
    protected $fillable = ['product_id' , 'pharmacy_id'];
}
