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
        Schema::table('projects', function (Blueprint $table) {
            // creo una chiave esterna per collegare il progetto alla tabella types
            // creo una colonna type_id
             $table->foreignId('type_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // droppo la chiave esterna
            $table->dropForeign(['type_id']);
            // droppo la colonna type_id
            $table->dropColumn('type_id');
        });
    }
};