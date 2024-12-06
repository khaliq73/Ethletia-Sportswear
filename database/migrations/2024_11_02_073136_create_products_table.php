<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
          
            $table->string('category');
            $table->json('images'); // JSON column to store multiple images
            $table->string('item');
            $table->string('material');
            $table->string('sizePrinting');
            $table->string('Design');
            $table->string('Logo');
            $table->string('Branding');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
