<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            [
                'name' => 'Laravel',
                'description' => 'تطوير تطبيقات الويب',
                'icon_svg' => '<svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" /></svg>',
                'proficiency_percentage' => 95,
                'gradient_colors' => 'from-blue-400 to-purple-500',
                'proficiency_text' => 'مستوى خبير',
            ],
            [
                'name' => 'PHP',
                'description' => 'برمجة الخلفية',
                'icon_svg' => '<svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 24 24"><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z" /></svg>',
                'proficiency_percentage' => 90,
                'gradient_colors' => 'from-green-400 to-teal-500',
                'proficiency_text' => 'متقدم',
            ],
            [
                'name' => 'MySQL',
                'description' => 'قاعدة بيانات',
                'icon_svg' => '<svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 24 24"><path d="M3 3v18h18V3H3zm16 16H5V5h14v14zM7 7h10v2H7V7zm0 4h10v2H7v-2zm0 4h7v2H7v-2z" /></svg>',
                'proficiency_percentage' => 85,
                'gradient_colors' => 'from-yellow-400 to-orange-500',
                'proficiency_text' => 'متقدم',
            ],
            [
                'name' => 'Blade',
                'description' => 'قوالب الواجهة',
                'icon_svg' => '<svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>',
                'proficiency_percentage' => 88,
                'gradient_colors' => 'from-cyan-400 to-blue-500',
                'proficiency_text' => 'متقدم',
            ],
            [
                'name' => 'Livewire',
                'description' => 'تطبيقات ديناميكية',
                'icon_svg' => '<svg class="w-12 h-12 mx-auto" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" /></svg>',
                'proficiency_percentage' => 82,
                'gradient_colors' => 'from-purple-400 to-pink-500',
                'proficiency_text' => 'متوسط+',
            ],
            [
                'name' => 'AWS',
                'description' => 'استضافة سحابية',
                'icon_svg' => '<div class="w-12 h-12 mx-auto text-5xl">☁️</div>',
                'proficiency_percentage' => 75,
                'gradient_colors' => 'from-orange-400 to-red-500',
                'proficiency_text' => 'متوسط',
            ],
            [
                'name' => 'Docker',
                'description' => 'التحاويز',
                'icon_svg' => '<div class="w-12 h-12 mx-auto text-5xl">🐳</div>',
                'proficiency_percentage' => 80,
                'gradient_colors' => 'from-blue-400 to-cyan-500',
                'proficiency_text' => 'متوسط',
            ],
            [
                'name' => 'DevOps',
                'description' => 'CI/CD والأتمتة',
                'icon_svg' => '<div class="w-12 h-12 mx-auto text-5xl">🔧</div>',
                'proficiency_percentage' => 78,
                'gradient_colors' => 'from-indigo-400 to-purple-500',
                'proficiency_text' => 'متوسط',
            ],
        ];

        Skill::insert($skills);
    }
}
