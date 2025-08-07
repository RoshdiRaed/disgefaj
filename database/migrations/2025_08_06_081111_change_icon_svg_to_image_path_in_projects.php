<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('image_path')->nullable()->after('icon_svg');
            $table->dropColumn('icon_svg');
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text('icon_svg')->nullable()->after('image_path');
            $table->dropColumn('image_path');
        });
    }
};
