<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("connections", function (Blueprint $table) {
            $table->text("description");
        });

        Schema::table("keycaps", function (Blueprint $table) {
            $table->text("description");
        });

        Schema::table("assemblies", function (Blueprint $table) {
            $table->text("description");
        });

        Schema::table("case_types", function (Blueprint $table) {
            $table->text("description");
        });

        Schema::table("types", function (Blueprint $table) {
            $table->text("description");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("connections", function (Blueprint $table) {
            $table->dropColumn("description");
        });

        Schema::table("keycaps", function (Blueprint $table) {
            $table->dropColumn("description");
        });

        Schema::table("assemblies", function (Blueprint $table) {
            $table->dropColumn("description");
        });

        Schema::table("case_types", function (Blueprint $table) {
            $table->dropColumn("description");
        });

        Schema::table("types", function (Blueprint $table) {
            $table->dropColumn("description");
        });
    }
};
