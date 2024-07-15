<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatedItemsTable extends Migration
{
    public function up()
    {
        Schema::create('donated_items', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->date('donation_date');
            $table->string('location');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donated_items');
    }
}
