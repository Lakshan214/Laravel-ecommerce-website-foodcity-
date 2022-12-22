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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('User_id')->nullable();

            $table->string('Product_name')->nullable();
            $table->string('Quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->string('product_id')->nullable();

            $table->string('Pyement_stutes')->nullable();
            $table->string('Dilivery_stutes')->nullable();
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
        Schema::dropIfExists('bills');
    }
};
