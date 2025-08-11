<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        if (!User::where('email', 'moge@gmail.com')->exists()) {
            $user = User::create([
                'name' => 'moge',
                'email' => 'moge@gmail.com',
                'password' => bcrypt('your-secure-password'), // استبدل بكلمة مرور قوية
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // إذا كنت تستخدم حزمة Spatie لإدارة الأدوار
            // $user->assignRole('admin');
        }
    }
}
