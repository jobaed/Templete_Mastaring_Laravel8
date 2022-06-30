<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->string('title');
            // $table->string('pass');
            $table->string('code')->unique();
            $table->integer('qty');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('brand');
            $table->foreign('brand')->references('id')->on('brands');
            $table->string('image')->nullable();
            $table->enum('status', ['1', '2', '3'])->default('1')->comment = "1=Active, 2=Inactive";
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
