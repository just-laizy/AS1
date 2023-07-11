<?php
#just-laizy
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    public function run(): void
    {
        $Seasons = [
            'Spring',
            'Summer',
            'autumn',
            'Winter',
        ];

        foreach($Seasons as $season){
            $obj = new season();
            $obj -> name = $season;
            $obj -> save();
        }
    }
}
