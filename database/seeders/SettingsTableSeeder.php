<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 
    Setting::create([
    'site_name' => 'موقع الإعلانات المبوبة',
    'about_us' => 'موقع الإعلانات المبوبة الأفضل في مصر، يمكنك نشر وشراء وبيع أي نوع من الإعلانات بسهولة وأمان.',
    'address' => ' طنطا، شارع البحر ',
    'phone' => '01225399159',
]);

      
    }
}
