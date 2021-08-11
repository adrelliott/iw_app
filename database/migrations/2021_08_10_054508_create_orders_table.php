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
            $table->string('pplus_ref')->nullable();
            $table->string('sib_ref')->nullable();
            $table->foreignId('contact_id')->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->integer('total');
            $table->timestamp('ordered_at');
            $table->timestamp('dispatched_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
