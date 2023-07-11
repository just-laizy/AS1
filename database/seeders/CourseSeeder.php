<?php
#just-laizy
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $Courses = [
            'Beginner',
            'Elementary',
            'Pre-Intermediate',
            'Intermediate',
            'Upper-Intermediate',
            'Advanced',
            'Practice',
            'TOEFL',
            'C9',
            'C10',
        ];

        foreach($Courses as $course){
            $obj = new course();
            $obj -> name = $course;
            $onj -> save();
        }
    }
}
