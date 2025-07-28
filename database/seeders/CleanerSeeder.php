<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cleaner;


class CleanerSeeder extends Seeder
{
    public function run(): void
    {
        $cleaners = [
            [
                'name' => 'أحمد محمد',
                'phone' => '+966501234567',
                'email' => 'ahmed@example.com',
                'password' => null,
                'national_id' => '1234567890',
                'address' => 'الرياض، المملكة العربية السعودية',
                'hire_date' => '2023-01-15',
                'status' => 'active',
                'image' => null,
            ],
            [
                'name' => 'فاطمة علي',
                'phone' => '+966507654321',
                'email' => 'fatima@example.com',
                'password' => null,
                'national_id' => '0987654321',
                'address' => 'جدة، المملكة العربية السعودية',
                'hire_date' => '2023-03-20',
                'status' => 'active',
                'image' => null,
            ],
            [
                'name' => 'محمد عبدالله',
                'phone' => '+966509876543',
                'email' => 'mohammed@example.com',
                'password' => null,
                'national_id' => '1122334455',
                'address' => 'الدمام، المملكة العربية السعودية',
                'hire_date' => '2023-06-10',
                'status' => 'active',
                'image' => null,
            ],
        ];

        foreach ($cleaners as $cleaner) {
            Cleaner::create($cleaner);
        }
    }
}
