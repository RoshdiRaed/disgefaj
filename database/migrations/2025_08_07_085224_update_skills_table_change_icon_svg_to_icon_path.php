<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn('icon_svg');
            $table->string('icon_path')->nullable()->after('description')->comment('Path to the uploaded icon image');
        });
    }

    public function down(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->text('icon_svg')->nullable()->after('description')->comment('SVG code for the skill icon');
            $table->dropColumn('icon_path');
        });
    }
};
