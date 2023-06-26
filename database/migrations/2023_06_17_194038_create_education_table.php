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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('expertise_en');
            $table->string('educaName_en');
            $table->string('year_en');
            $table->string('link_en');
            $table->text('summernote_en');


            $table->string('expertise_ar');
            $table->string('educaName_ar');
            $table->string('year_ar');
            $table->string('link_ar');
            $table->text('summernote_ar');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
