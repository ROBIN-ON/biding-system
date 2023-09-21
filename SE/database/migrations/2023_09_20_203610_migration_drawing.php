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
        Schema::create('drawing', function (Blueprint $table) {
            $table->id('drawing_id'); //
            $table->string('auction_title', 70);
            $table->text('location', 70);
            $table->date('auction_date');
            $table->text('auction_period');
            $table->string('lot_reference_number');
            $table->string('lot_number');
            $table->date('dop');
            $table->text('piece_title')->nullable();
            $table->decimal('estimate_price', 10, 2); // Assuming estimate_price is a decimal value
            $table->string('dimension');
            $table->text('framed');
            $table->text('artist');
            $table->text('lot_description');
            
            $table->string('image')->nullable();
            // $table->string('image')->nullable();
            $table->timestamps(); // created at and updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
