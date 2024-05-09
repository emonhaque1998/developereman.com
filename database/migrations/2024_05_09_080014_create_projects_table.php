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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("sub_title");
            $table->longText("description");
            $table->json("include");
            $table->string("banner");
            $table->json("images");
            $table->longText("summary");
            $table->string("clinet_name");
            $table->string("location");
            $table->dateTime("publish_date");
            $table->string("small_banner");
            $table->string("slug")->unique();
            $table->unsignedBigInteger("project_category_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
