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
        Schema::create("custom_orders", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users");
            $table->unsignedBigInteger("type_id");
            $table->foreign("type_id")->references("id")->on("types");
            $table->unsignedBigInteger("keyswitch_id");
            $table
                ->foreign("keyswitch_id")
                ->references("id")
                ->on("key_switches");
            $table->unsignedBigInteger("connection_id");
            $table
                ->foreign("connection_id")
                ->references("id")
                ->on("connections");
            $table->unsignedBigInteger("assembly_id");
            $table->foreign("assembly_id")->references("id")->on("assemblies");
            $table->unsignedBigInteger("keycap_id");
            $table->foreign("keycap_id")->references("id")->on("keycaps");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("custom_orders");
    }
};
