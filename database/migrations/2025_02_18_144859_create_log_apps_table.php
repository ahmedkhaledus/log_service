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
        Schema::create('log_apps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("log_id")->nullable();
            $table->foreign("log_id")->references("id")->on("logs");
            $table->longText("app_version")->nullable();
            $table->longText("web_service_version")->nullable();
            $table->longText("database_version")->nullable();
            $table->longText("back_office_version")->nullable();
            $table->longText("app_id")->nullable();
            $table->longText("app_name")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_apps');
    }
};
