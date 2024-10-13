<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $student = Student::create([
            'name' => 'Tiara',
            'nisn' => '1234567890',
            'school' => 'SMKN_2_Nganjuk',
            'classroom' => 'XI',
            'gender' => 'P',
            'date_of_birth' => '1990-08-12',
            'no_hp' => '08989898900',
        ]);

    }
}
