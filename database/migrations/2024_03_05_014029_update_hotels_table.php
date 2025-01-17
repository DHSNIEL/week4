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
        Schema::table('hotels', function(Blueprint $table){
            $table->string('name');
            $table->string('address');
            $table->string('postcode');
            $table->double('longitude', 8, 3);
            $table->double('latitude', 8, 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn(['name', 'address', 'postcode', 'longitude', 'latitude']);
        });
    }
};
