<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('direct_messages', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->unsignedBigInteger('donation_item_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('destination_user_id');
            $table->boolean('seen')->default(false);
            $table->timestamps();

            $table->foreign('donation_item_id')->references('id')->on('donation_items');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('destination_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direct_messages');
    }
};
