<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contents', function (Blueprint $table) {
            // Change the column type safely to 'json' or 'text'
            $table->text('description')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('contents', function (Blueprint $table) {
            // Optionally revert to string (not recommended)
            $table->string('description', 255)->nullable()->change();
        });
    }
};
