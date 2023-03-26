<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('cost',8,2);   // price  -- max price 999999,99
            $table->string('name');        // User
            $table->string('email');       // User email
            $table->string('status');      // Is order paid or not
            $table->string('city');        // User city
            $table->string('address');      // User adress
            $table->string('phone');       // User phone
            $table->date('date');          // date of order
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
        Schema::dropIfExists('orders');
    }
}
