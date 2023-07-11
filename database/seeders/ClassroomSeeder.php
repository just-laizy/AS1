<?php
#just-laizy
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    public function run(): void
    {
        $Classrooms = [
            'A1',
            'A2',
            'A3',
            'B1',
            'B2',
            'B3',
            'D4',
            'D5',
        ];

        foreach($Classrooms as $classroom){
            $obj = new classroom();
            $obj -> name = $classroom;
            $obj -> save();
        }
    }
}
