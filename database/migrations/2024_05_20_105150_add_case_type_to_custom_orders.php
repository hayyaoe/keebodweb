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
        Schema::table("custom_orders", function (Blueprint $table) {
            $table->unsignedBigInteger("case_type_id");
            $table->foreign("case_type_id")->references("id")->on("case_types");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("custom_orders", function (Blueprint $table) {
            //
        });
    }
};
