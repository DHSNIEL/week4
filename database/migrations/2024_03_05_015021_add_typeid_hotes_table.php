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
        Schema::table('hotels', function(Blueprint $tb){
            $tb->unsignedBigInteger('type_id');
            $tb->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function(Blueprint $tb){
            $tb->dropForeign(['type_id']);
            $tb->dropColumn(['type_id']);
        });
    }
};