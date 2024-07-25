<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Suranjan', 'address' => 'Ambalangoda, Sri Lanka', 'mobile' => '08719849846' ],
            ['name' => 'Rushan', 'address' => 'Benthara, Sri Lanka', 'mobile' => '08719849846' ],
        ];

        foreach ($data as $attributes){
            Student::create($attributes);
        }
    }
}
