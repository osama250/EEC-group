<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('products_pharmacies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('pharmacy_id')->constrained('pharmacies');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products_pharmacies');
    }
};
