<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_product');
            $table->decimal('precio_product');
            $table->integer('stock_product')->nullable();
            $table->string('image_product')->nullable();
            $table->string('peso_product')->nullable();
            $table->string('description_product')->nullable();
            $table->timestamps();

            //forma 1 de relacionar dos tablas

            // $table->foreign(id_category)->references('id')->on('categories');

            //forma 2 de relacionar dos tablas

            $table->foreignId('id_category')
                ->nullable()
                ->constrained('categories')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
