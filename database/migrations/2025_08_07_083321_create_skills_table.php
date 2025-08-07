<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Name of the skill (e.g., Laravel, PHP)');
            $table->string('description')->comment('Short description of the skill');
            $table->text('icon_svg')->comment('SVG code for the skill icon');
            $table->integer('proficiency_percentage')->comment('Proficiency level (0-100)');
            $table->string('gradient_colors')->comment('Tailwind gradient classes (e.g., from-blue-400 to-purple-500)');
            $table->string('proficiency_text')->comment('Proficiency description (e.g., Expert, Advanced)');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
