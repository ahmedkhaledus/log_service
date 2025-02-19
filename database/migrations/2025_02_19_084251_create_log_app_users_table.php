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
        Schema::create('log_app_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("log_client_id")->nullable();
            $table->foreign("log_client_id")->references("id")->on("log_clients");
            $table->string("app_user_id")->nullable();
            $table->string("name")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_app_users');
    }
};
