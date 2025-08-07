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
            $table->string('title'); // عنوان المشروع
            $table->text('description'); // وصف المشروع
            $table->string('status'); // حالة المشروع (مكتمل، جاري التطوير، إلخ)
            $table->json('technologies'); // التقنيات المستخدمة (مخزنة كـ JSON)
            $table->float('rating'); // التقييم (مثل 4.9)
            $table->integer('reviews_count'); // عدد التقييمات
            $table->string('icon_svg')->nullable(); // رمز SVG للمشروع
            $table->string('gradient_colors')->nullable(); // ألوان التدرج للخلفية
            $table->string('action_text'); // نص الزر (مثل "عرض المشروع")
            $table->string('action_url')->nullable(); // رابط الزر
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
