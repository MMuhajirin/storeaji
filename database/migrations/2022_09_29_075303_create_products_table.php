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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('user_id');
            $table->string('code');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->longtext('description')->nullable();
            $table->string('photo')->nullable();
            $table->integer('qty')->default(0);
            $table->string('unit')->nullable();
            $table->integer('price')->default(0);
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->reference('id')->on('categories');
            $table->foreign('user_id')->reference('id')->on('users');
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
}
