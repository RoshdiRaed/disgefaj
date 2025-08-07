<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('call_to_actions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('عنوان القسم');
            $table->text('description')->comment('وصف القسم');
            $table->string('primary_button_text')->comment('نص الزر الأساسي');
            $table->string('primary_button_url')->nullable()->comment('رابط الزر الأساسي');
            $table->string('secondary_button_text')->nullable()->comment('نص الزر الثانوي');
            $table->string('secondary_button_url')->nullable()->comment('رابط الزر الثانوي');
            $table->string('background_opacity')->default('10')->comment('شفافية الخلفية (1-100)');
            $table->string('border_color')->default('white')->comment('لون الحدود');
            $table->boolean('is_active')->default(true)->comment('حالة التفعيل');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('call_to_actions');
    }
};
?>
